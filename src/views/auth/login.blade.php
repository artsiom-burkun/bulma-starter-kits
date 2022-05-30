@extends('auth.__templates.forms')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')

    <h1 class="title m-t-30" >
        Войти:
    </h1>

    <form action="{{ route('login') }}" method="POST" role="form">
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

            <div class="field" for="email">
                <div class="control is-expanded">
                    <label class="label">Введите пароль:</label>
                        <input
                            class="input"
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Ваш пароль"
                            password-reveal>         
                        </input>
                    </div>
                </div>


            <label class="checkbox">
                <input type="checkbox" name="remember" class="m-t-5">
                    Запомнить
            </label>

            <button class="button is-black is-medium is-pulled-right" type="submit">
                Войти
            </button>

            <hr class="m-t-35 m-b-10"/>
            <h5>
                <a href="{{route('password.request')}}" class="is-muted">Восстановить пароль</a><br/>
                <a href="{{route('register')}}" class="is-muted">Регистрация</a><br/>
            </h5>

    </form>

@endsection