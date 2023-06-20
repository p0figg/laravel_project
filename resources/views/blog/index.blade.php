@extends('layouts.main')
@section('page.title')
    Список постов
@endsection
@section('main.content')
<x-title>
    {{__('Список постов')}}
</x-title>
@include('blog.filter')
        @if (empty($posts))
        {{__('Wow, such empty')}}
            
        @else
        
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                 <x-post.card :post="$post"></x-post>
            </div>
            @endforeach


        </div>
        @endif
@endsection
