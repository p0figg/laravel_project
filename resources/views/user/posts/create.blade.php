@extends('layouts.main')
@section('page.title')
    Создание поста
@endsection
@section('main.content')
<x-title>
    {{__('Создание поста')}}
    <x-slot name="link">
        <a href='{{route('user')}}'>
        {{__('Назад')}}</a>
    </x-slot>
</x-title>
<x-post.form  action="{{ route('posts.store') }}" method="post">
<x-button type="submit">
    {{__('Создать пост')}}
</x-button>
</x-post.form>
@endsection
