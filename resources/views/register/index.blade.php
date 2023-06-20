@extends('layouts.auth')
@section('page.title')
    Регистрация
@endsection
@section('auth.content')

                <x-card>
                    <x-card-header>
                        <x-card-title>
                            <div class="card-body">
                            <h4 class="m-0">
                                {{__('Регистрация')}}
                            </h4>
                        </x-card-title>
                        </div>
                    </x-card-header>
                    <x-card-body>
                        <x-form action="{{route('register.store')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <x-form-item>
                        <x-label required>
                            {{__('Email')}}
                        </x-label>
                        <x-input type='email' name='email' autofocus></x-input>
                    </x-form-item>
                    <x-form-item>
                        <x-label required>
                            {{__('Пароль')}}
                        </x-label>
                        <x-input type="password" name='password' />
                    </x-form-item>
                    <x-label required>
                        {{__('Пароль еще раз')}}
                    </x-label>
                    <x-input type="password" name='password_confirmation' />
                    <x-form-item>
                        <x-checkbox name='user-agreement'>
                            {{__('Я согласен(на) на обработку пользовательских данных')}}
                        </x-checkbox>
                    </x-form-item>
                    <x-button type='submit'>
                        {{__('Зарегистрироваться')}}
                    </x-button>
                    </x-form>
                </x-card-body>
                </x-card>
@endsection

