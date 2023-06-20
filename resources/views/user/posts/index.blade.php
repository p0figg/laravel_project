@extends('layouts.main')
@section('page.title')
    Мои посты
@endsection
@section('main.content')
<x-title>
    {{__('Мои посты')}}
    <x-slot name="right">
        <x-button-link href="{{route('posts.create')}}">
            {{__('Создать')}}
        </x-button>
    </x-slot>
</x-title>
        @if (empty($posts))
        {{__('Wow, such empty')}}
            
        @else
        
            @foreach ($posts as $post)
            <div class="mb-5">
                 <h2 class="h6 mb-3">
                    <a href="{{route('posts.show', $post->id)}}">
                    {{$post->title}}
                    </a>
                 </h2>
                 <div class="small text-muted">
                    {{now()->format('d.m.Y H:i:s')}}
                 </div>
            </div>
            @endforeach


        @endif
@endsection
