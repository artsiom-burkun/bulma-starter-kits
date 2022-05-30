@extends('auth.__templates.start')

@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

@section('content')
	<div class="card">
        <div class="card-content welcome-card">

            <div class="columns is-multiline">
            	<div class="column is-6 welcome-column">
            		<div class="box welcome-box">
                		<div class="content is-small">
                			<h3 class="title">
                				<a href="https://laravel.com/docs" target="_blank">
                					Документация
                				</a>
                			</h3>

                			<p>
                                Текущая страница bulma.index: {{ Nav::isroute('welcome') }} <br><br>
                                Выводим пару слов: {{ Bulma::getBulma('0.9.4') }}

                            </p>

                            <p>
                				У Ларавел прекрасная документация, которая покрывает все аспекты фреймворка. Новичок или у вас богатый опыт взаимодействия с Laravel, мы рекомендуем читать всю документацию от начала до конца.
                			</p>
                		</div>
            		</div>
            	</div>

            	<div class="column is-6 welcome-column">
            		<div class="box welcome-box">
                		<div class="content is-small">
                			<h3 class="title">
                				<a href="https://laracasts.com/" target="_blank">
                					Подкасты
                				</a>
                			</h3>

                			<p>
                				Ларакасты предлагают тысячи обучающих видео о Laravel, PHP и Javascript.
                				Взгляните на них, выберите видео нужное вам видео и поднимите на новый уровень свои навыки разработки в процессе просмотра обучающего материала. 
                			</p>
                		</div>
            		</div>
            	</div>

            	<div class="column is-6 welcome-column">
            		<div class="box welcome-box">
                		<div class="content is-small">
                			<h3 class="title">
                				<a href="https://laravel-news.com/" target="_blank">
                					Новости
                				</a>
                			</h3>

                			<p> 
                				Новости Laravel — это портал сообщества, в котором собраны 
                				последние и самые важные новости из мира Ларавел, 
                				включая новые компоненты и инструкции. 
                			</p>
                		</div>
            		</div>
            	</div>

            	<div class="column is-6 welcome-column">
            		<div class="box welcome-box">
                		<div class="content is-small">
                			<h3 class="title">
                				Экосистема
                			</h3>

                			<p>
                				Набор мощных инструментов и библиотек для Ларавел таких как

                            	<a class="box-link" href="https://forge.laravel.com">Forge</a>, 
                                <a class="box-link" href="https://vapor.laravel.com">Vapor</a>, 
                                <a class="box-link" href="https://nova.laravel.com">Nova</a>, 
                                и <a class="box-link" href="https://envoyer.io">Envoyer</a> , 
                                
                                позволит вам вывести ваши проекты на новый уровень. 
                                Комбинируйте их с компонентами с открытым кодом такими как 

                				<a class="box-link" href="https://laravel.com/docs/billing">Cashier</a>,
                				<a class="box-link" href="https://laravel.com/docs/dusk">Dusk</a>,
                				<a class="box-link" href="https://laravel.com/docs/broadcasting">Echo</a>,
                				<a class="box-link" href="https://laravel.com/docs/horizon">Horizon</a>,
                				<a class="box-link" href="https://laravel.com/docs/sanctum">Sanctum</a>,
                				<a class="box-link" href="https://laravel.com/docs/telescope">Telescope</a>. 
                			</p>
                		</div>
            		</div>
            	</div>
            </div>


            
            
        </div> <!-- end of .card-content -->
    </div> <!-- end of .card -->

@endsection