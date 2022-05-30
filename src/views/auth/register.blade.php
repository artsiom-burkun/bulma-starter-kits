@extends('auth.__templates.forms')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')

    <h1 class="title m-t-30" >
        Зарегистрироваться:
    </h1>
    
    <form action="register" method="POST" role="form">
        @csrf

        <div class="field m-b-20" for="email">
            <div class="control is-expanded">
                <label class="label">Введите Имя:</label>
                <input
                        class="input "
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Ваше имя"
                        required>
                </input>
            </div>
        </div>

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
                        password-reveal
                        placeholder="Ваш пароль"
                >
                </input>
            </div>
        </div>
        
        <div class="field" for="email">
            <div class="control is-expanded">
                <label class="label">Подтвердите пароль:</label>
                <input
                        class="input"
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        password-reveal
                        placeholder="Повторите пароль"
                >
                </input>
            </div>
        </div>


        <button class="button is-black is-medium is-pulled-right  m-b-20" type="submit">
            Зарегистрироваться
        </button>

        <hr class="clear m-b-10"/>
        <h5>
            <a href="{{route('login')}}" class="is-muted">Уже зарегистрированы?</a><br/>
        </h5>

    </form>

@endsection