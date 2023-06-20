@extends('layouts.main')
@section('page.title')
    Редактирование поста
@endsection
@section('main.content')
<x-title>
    {{__('Редактирование поста')}}
    <x-slot name="link">
        <a href='{{route('posts.show', $post->id)}}'>
        {{__('Назад')}}</a>
    </x-slot>
</x-title>
 <x-post.form action="{{route('posts.update', $post->id)}}" method="put" :post="$post"/> 
@endsection
