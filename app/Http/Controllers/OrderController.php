<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\order;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $types = Type::all();
        $orders = order::all();
        return view('admin.order', compact('orders', 'types'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->back()->with('success', 'يجب تسجيل الدخول');
        } else {

            $order = order::create([
                'user_id' => $user->id,
                'content_id' => $request->content_id,
                'count' => $request->count,
            ]);
            return redirect()->back()->with('success', 'تمت اضافة الصنف للسلة الخاصة بك');
        }
    }
    static function item_Num()
    {
        $user_id = Auth::user()->id;
        return order::with('content')->where('user_id' , $user_id)->count();
    }

    static function getAllOrder()
    {
        $types = Type::all();
        $user_id = Auth::user()->id;
        $orders =  order::with('content')->where('user_id' , $user_id)
            ->select('content_id' , DB::raw('sum(count) as total'))
            ->groupBy('content_id')
            ->get();
        return view('AllOrder', compact('orders', 'types'));
    }

    public function remove($id)
{
   
}
    // public function remove(Content $content)
    // {
    //     $content->delete();
    //     return redirect()->back()->with('success', 'تم الحذف بنجاح');
    // }
    // public function remove($id)
    // {
    //     // order::destroy($id);
    //     order::destroy($id);
    //     return redirect('getAllOrder');
    // }
    public function edit(order $order)
    {
        //
    }

    public function update(Request $request, order $order)
    {
        //
    }

    public function destroy(order $order)
    {
        $order->destroy($order->id);
        return redirect()->back()->with('success', 'تمت الحذف  بنجاح');
    }
        
}
