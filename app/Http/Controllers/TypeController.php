<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\comment;
use App\Models\Testimonial;
use App\Models\Type;
use App\Models\visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class TypeController extends Controller
{

    public function index()
    {
        $types = Type::all();
        return view('admin.type', compact('types'));
    }

   


    public function store(Request $request)
    {
        $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
        $imagePath = public_path('/images');
        $request->image->move($imagePath, $imageName);

        $type = Type::create([
            'name' => $request->name,
            'image' => "/images/$imageName"
        ]);
        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    public function update(Request $request, Type $type)
    {
        if ($request->has('image')) {
            $imageName = time() . '_' . md5(Str::random(2)) . '_' . uniqid() . '.' . $request->image->extension();
            $imagePath = public_path('/images');
            $request->image->move($imagePath, $imageName);

            $type->update([
                'name' => $request->name,
                'image' => "/images/$imageName"
            ]);
        } else {
            $type->update([
                'name' => $request->name,
            ]);
        }
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

    public function getType()
    {
        $visitor = visitors::first();
        $count = $visitor->count;
        $visitor->update(['count' => $count + 1]);
        $types = Type::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('types', 'testimonials'));
    }
}
