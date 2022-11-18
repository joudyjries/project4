<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function index()
    {
        $types = Type::all();
        $comments = comment::all();
        return view('admin.comment', compact('types', 'comments'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->back()->with('success', 'يجب تسجيل الدخول');
        } else {

            $comment = comment::create([
                'user_id' => $user->id,
                'comment' => $request->comment,
                'content_id' => $request->content_id,
            ]);
        }
        return redirect()->back()->with('success', 'تمت اضافة تعليقك بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'تمت الحذف  بنجاح');
    }
}
