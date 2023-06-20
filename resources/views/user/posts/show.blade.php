@extends('layouts.main')
@section('page.title')
    Просмотр поста
@endsection
@section('main.content')
<x-title>
    {{__('Просмотр поста')}}
    <x-slot name="right">
        <x-button-link href="{{route('posts.edit', $post->id)}}">{{__('Изменить')}}</x-button-link>
    </x-slot>
</x-title>

<h2 class="h6 mb-3">
    {{$post->title}}
 </h2>
 <div class="small text-muted">
    {{now()->format('d.m.Y H:i:s')}}
 </div>
<div class="pt-3">
    {!!$post->content!!}
</div>
@endsection