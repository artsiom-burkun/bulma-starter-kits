@extends('auth.__templates.forms')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')

    <h1 class="title m-t-30" >
        Войти:
    </h1>

    <form action="{{ route('password.update') }}" method="POST" role="form">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">


        <div class="field m-b-20" for="email">
            <div class="control is-expanded">
                <label class="label">Введите Email:</label>
                    <input
                        class="input "
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Ваш email"
                        value="{{$request->email}}"
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

            <button class="button is-black is-medium is-pulled-right m-b-20" type="submit">
                Задать новый пароль
            </button>

            <hr class="clear m-b-10"/>
	        <h5>
	            <a href="{{route('login')}}" class="is-muted">Войти</a><br/>
	            <a href="{{route('register')}}" class="is-muted">Регистрация</a><br/>
	        </h5>

    </form>

@endsection