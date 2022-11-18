<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function search(Request $request)
    {
        $types = Type::all();
        $search = $request->search;
        $categories = Category::where('name', 'like', '%' . $search . '%')
            ->orWhereHas('contents', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->get();
        return view('categories', compact('categories', 'types'));
    }

    public function getCategory(Type $type)
    {
        $types = Type::all();
        $categories = $type->categories()->get();
        return view('admin.category', compact('categories', 'types', 'type'));
    }

    public function store(Request $request)
    {
        $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
        $imagePath = public_path('/images');
        $request->image->move($imagePath, $imageName);

        $category = Category::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'image' => "/images/$imageName"
        ]);
        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }


    public function update(Request $request, Category $category)
    {
        if ($request->has('image')) {
            $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
            $imagePath = public_path('/images');
            $request->image->move($imagePath, $imageName);

            $category->update([
                'name' => $request->name,
                'type_id' => $request->type_id,
                'image' => "/images/$imageName"
            ]);
        } else {
            $category->update([
                'name' => $request->name,
                'type_id' => $request->type_id,
            ]);
        }
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function getAllCategory(Type $type)
    {
        $types = Type::all();
        $categories = $type->categories()->get();
        return view('AllCategory', compact('categories', 'types', 'type'));
    }
}
