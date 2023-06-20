<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return "Список постов";
    }

    public function create()
    {
        return "Создание поста";
    }

    public function store()
    {
        return "Хранение поста";
    }

    public function show($post)
    {
        return "Просмотр поста $post";
    }

    public function edit()
    {
        return "Редактирование поста";
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
