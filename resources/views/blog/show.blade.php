@extends('layouts.main')
@section('page.title', $post->title)
@section('main.content')
<x-title>
    {{__($post->title)}}
    <x-slot name="link">
        <a href='{{route('blog')}}'>
        {{__('назад')}}</a>
    </x-slot>
</x-title>
       {!!$post->content!!}
@endsection