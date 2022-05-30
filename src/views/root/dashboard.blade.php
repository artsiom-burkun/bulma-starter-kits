@extends('auth.__templates.panel')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
<div class="columns">
    <div class="column is-12 m-t-40">
        <div class="card">
            <div class="card-content content">
            	<h1 class="title is-4">
            		Вы успешно вошли в систему.
            	</h1>

            	<p>
            		Шаблон включает в себя следующие страницы:
            	</p>

            	<ul>
            		<li>
            			Стартовая страница.
            		</li>
            		<li>
            			Формы регистрации, логина и другие.
            		</li>
            		<li>
            			Страница панели.
            		</li>

            	</ul>
            	
            </div>
        </div>
    </div>
</div>
@endsection