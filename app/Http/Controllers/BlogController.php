<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');



        $post = (object)[
            'id' =>123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Eos, natus?',
            'category_id' => 1,

        ];
        $posts = array_fill(0,10, $post);
        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && !str_contains(strtolower($post->title), strtolower($search))) {

                return false;
            }
            if ($category_id && $post->category_id != $category_id) {

                return false;
            }
            return true;
    
        });
        return view("blog.index", compact("posts"));
    }

    public function show($post)
    {
        $post = (object)[
            'id' =>123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Eos, natus?',

        ];
        return view("blog.show",compact('post'));
    }

    public function like()
    {
        return "Поставить лайк";
    }
}
