<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function postpage(Request $request)
    {
        return view('form');
    }

    public function wys()
    {
        return view('wysiwyg');
    }

    public function savenew(Request $request)
    {
        $_POST = new Form;
        $_POST->title = $request->title;
        $_POST->main = $request->main;
        $_POST->save();

        $post = $_POST;

        // 画像の保存
        if ($request->post_img) {

            if ($request->post_img->extension() == 'gif' || $request->post_img->extension() == 'jpeg' || $request->post_img->extension() == 'jpg' || $request->post_img->extension() == 'png') {
                $request->file('post_img')->storeAs('public/post_img', $post->id . '.' . $request->post_img->extension());
            }
        }

        return redirect('/index');
    }

    public function index(Request $request)
    {
        $data = Form::orderBy('created_at', 'desc')->get();

        return view('post')->with(['data' => $data]);
    }

    public function show($id)
    {
        $data = Form::where('id', $id)->first();
        return view('show')->with(['data' => $data]);
    }
}
