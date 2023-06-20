<x-card>
    <x-card-header>
        <x-card-title>
            <div class="card-body">
            <h4 class="m-0">
                {{__('Вход')}}
            </h4>
        </x-card-title>
        </div>
    </x-card-header>
    <x-card-body>
        <x-form action="{{route('login.store')}}" method="POST">
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
    <x-form-item>
        <x-checkbox name='remember'>
            {{__('запомнить меня')}}
        </x-checkbox>
    </x-form-item>
    <x-button type='submit'>
        {{__('Войти')}}
    </x-button>
    </x-form>
</x-card-body>
</x-card>  