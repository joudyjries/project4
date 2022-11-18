<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class TestimonialController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('Testimonial',compact('types'));
    }

    
    public function getTestimonial()
    {
        $types = Type::all();
        $testimonials = Testimonial::all();
        return view('admin.testimonial' , compact('testimonials' , 'types'));
    }

    public function store(Request $request)
    {
        Testimonial::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('getType')->with('success', 'شكرا لتقييمك لموقعنا');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
