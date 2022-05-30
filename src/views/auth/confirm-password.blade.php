@extends('auth.__templates.forms')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
    <h1 class="title m-t-30" >
        Подтверждение пароля:
    </h1>

    <div class="content">
    	Страница безопасности.<br/> Подтвердите ваш пароль, чтобы продолжить. 
    </div>

    <form action="/" method="POST" role="form">
        @csrf

        <div class="field m-b-20" for="email">
            <div class="control is-expanded">
                <label class="label">Введите пароль:</label>
                <input
                        class="input "
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Ваш пароль"
                        required>
                </input>
            </div>
        </div>

        <button class="button is-black is-medium is-pulled-right m-b-20" type="submit">
            Подтвердить
        </button>

        <hr class="clear m-b-10"/>
        <h5>
            <a href="/" class="is-muted">Главная</a><br/>
        </h5>

    </form>
@endsection
