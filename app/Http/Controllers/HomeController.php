<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Testimonial;
use App\Models\Type;
use App\Models\User;
use App\Models\visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if (Auth::user()->role === 'super_admin') {
            $visitor = visitors::first()->count;
            $orders = order::count();
            $types = Type::all();
            $customer =  User::where('role' , 'user')->count();
            return view('admin.home', compact('types' , 'visitor' , 'customer' , 'orders'));
        } else {
            $visitor = visitors::first();
            $count = $visitor->count;
            $visitor->update(['count' => $count + 1]);
            $types = Type::all();
            $testimonials = Testimonial::all();
            return view('welcome', compact('types' , 'testimonials'));
        }
    
    }
}
