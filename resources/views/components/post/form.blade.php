@props(['post'=>null])
<x-form {{$attributes}}>
    <x-form-item>
        <x-label required>{{__('Название поста')}}</x-label>
        <x-input name="title" value="{{$post->title ?? ''}}" autofocus></x-input>
    </x-from-item>
    <x-form-item>
        <x-label required>{{__('Содержание поста')}}</x-label>
        <x-trix name="content" value="{{$post->content ?? ''}}"></x-trix>
    </x-from-item>
    <x-button {{$attributes}} type="submit">
        {{__('Создать')}}
    </x-button>
</x-form>