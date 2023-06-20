<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' =>123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Eos, natus?',

        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.index',compact('posts'));
    }

    public function create()
    {
        return  view('user.posts.create');
    }

    public function store(Request $request)
    {
        $post_title=$request->input("title");
        $post_content=$request->input("content");
        dd($post_title, $post_content);
        return "Хранение поста";
    }

    public function show($post)
    {
        $post = (object)[
            'id' =>123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Eos, natus?',

        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.show', compact('post'));
    }

    public function edit()
    {
        $post = (object)[
            'id' =>123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Eos, natus?',

        ];
        $posts = array_fill(0,10, $post);
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $post_title=$request->input("title");
        $post_content=$request->input("content");
          dd($post_title, $post_content);
        return "Обновление поста";
    }

    public function delete()
    {
        return "Удаление поста";
    }




}
