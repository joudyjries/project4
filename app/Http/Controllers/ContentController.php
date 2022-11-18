<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\order;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ContentController extends Controller
{

    public function getContent(Category $category)
    {
        $types = Type::all();
        $contents = $category->contents()->get();
        return view('admin.content', compact('contents', 'types', 'category'));
    }

    public function store(Request $request)
    {
        $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
        $imagePath = public_path('/images');
        $request->image->move($imagePath, $imageName);

        $content = Content::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => "/images/$imageName"
        ]);
        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    public function update(Request $request, Content $content)
    {
        if ($request->has('image')) {
            $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
            $imagePath = public_path('/images');
            $request->image->move($imagePath, $imageName);

            $content->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => "/images/$imageName"
            ]);
        } else {
            $content->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function show(Content $content)
    {
        $relateds =  order::with('content')
        ->select('content_id' , DB::raw('count(content_id) as total'))
        ->orderBy('total' , 'desc')
        ->groupBy('content_id')
        ->get()->take(8);
        $types = Type::all();
        return view('ShowContent' , compact('content' , 'types' , 'relateds'));
    }


    public function getAllContent(Category $category)
    {
        $types = Type::all();
        $contents = $category->contents()->get();
        return view('AllContent', compact('contents', 'types', 'category'));
    }
}
