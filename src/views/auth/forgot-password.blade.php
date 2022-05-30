@extends('auth.__templates.forms')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
    <h1 class="title m-t-30" >
        Восстановление пароля:
    </h1>

    <div class="content">
        Забыли пароль? Просто укажите ваш email и мы вышлем ссылку, 
        которая позволит задать новый пароль.
    </div>

    <form action="{{ route('password.email') }}" method="POST" role="form">
        @csrf

        <div class="field m-b-20" for="email">
            <div class="control is-expanded">
                <label class="label">Введите Email:</label>
                <input
                        class="input "
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Ваш email"
                        required>
                </input>
            </div>
        </div>

        <button class="button is-black is-medium is-pulled-right m-b-20" type="submit">
            Получить ссылку на почту
        </button>

        <hr class="clear m-b-10"/>
        <h5>
            <a href="{{route('login')}}" class="is-muted">Войти</a><br/>
            <a href="{{route('register')}}" class="is-muted">Регистрация</a><br/>
        </h5>

    </form>
@endsection
