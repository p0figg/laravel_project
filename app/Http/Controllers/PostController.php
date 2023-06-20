<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('user.posts.index');
    }

    public function create()
    {
        return  view('user.posts.create');
    }

    public function store()
    {
        return "Хранение поста";
    }

    public function show($post)
    {
        return view('user.posts.show', compact('post'));
    }

    public function edit()
    {
        return view('user.posts.edit', compact('post'));
    }

    public function update()
    {
        return "Обновление поста";
    }

    public function delete()
    {
        return "Удаление поста";
    }





}
