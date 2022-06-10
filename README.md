# Laravel Bulma: Набор стартовых инструментов с css фреймворком Bulma

Готовые файлы Blade с фреймворком Булма в качестве стартового набора для вашего нового приложения.
Заменяет представления на новые файлы.


## Установка

Установка данного пакета похожа на установку любого другого пакета Ларавел.

Начинаем новую установку проекта Ларавел, завершаем установку Starter Kit.
Подгружаем пакет Булма, проводим публикацию и получаем новые blade-файлы в качестве отправной точки для вашего приложения.


#### 1. Установка через Composer

Получаем пакет используя Composer:

```
composer require temich/bulma
```

**Важно:** Ларавел использует автоматический поиск пакетов. Поэтому вы можете пропустить 2-ой и 3-ий шаг и перейти сразу к 4-му пункту.
Не забываем заменить локаль на `ru` в файле `config/app.php`.

Если вы предпочитаете ручную настройку, то просто переходите к следующему шагу с сервис провайдером.

#### 2. Определить Сервис Провайдер

Открываем файл `config/app.php` и определяем новый провайдер:

```
'providers' => [
//  other providers

/*
* Package Service Providers...
*/
Temich\Bulma\BulmaServiceProvider::class,


//  other providers
];
```

Пакет включает файлы локализации, такие как `ru.json` и другие.
Поэтому, это хороший момент, чтобы указать локаль:

```
'locale' => 'ru',
```

Вы можете использовать любую другую локаль.


#### 3. Обновим файл `composer.json`

Открываем файл в `composer.json` в корне вашего приложения и добавляем:

```
"autoload": {
    "psr-4": {
		"Temich\\Bulma\\": "vendor/temich/bulma/src"
    }
},
```

Не забываем обновить автозагрузчик композера:
```
composer dump-autoload
```


#### 4. Публикация файлом поставщика.

Публикуем файлы поставщика в текущее приложение.

Для того чтобы заменить содержимое типовых файлов,
рекомендуется очистить папку `resources` и удалить файл `webpack.mix.js` в корне проекта.

Или можно просто использовать опцию `--force`, чтобы перезаписать содержимое файлов:

```
php artisan vendor:publish --provider="Temich\Bulma\BulmaServiceProvider" --force
```


#### 5. Получаем Булма

Подгружаем css фреймворк Булма и собираем конечные файлы стилей.

```
npm install bulma
npm run dev
```

**Важно:** В некоторых случаях нужно загружать дополнительные зависимости и поэтому появляется ошибка.
В этой ситуации необходимо выполнить `npm run dev` еще раз.

Открываем сайт в браузере.

**Важно:** Нажимаем  Ctrl+F5 в браузере, чтобы очистить кэш (обновить файл app.css) для данного сайта.


## Использование

Blade файлы соответствуют указаниям в контроллерах и маршрутах.
Можно спокойно редактировать, удалять или добавлять новые файлы.
Пакет готов к использованию.





# EN Laravel Bulma: Starter Kits with css framework Bulma

Blade files with css framework Bulma as Starter Kits for another Laravel app.
Replace standard views files by new Bulma-blade files.

## Installation

Installation is similar to every other Laravel Package.

Start building your new Laravel application, finish Starter Kits setup.
Get Bulma package, publish assets and get new blade files.


#### 1. Install via Composer

Get package through Composer:

```
composer require temich/bulma
```

**Note:** Laravel uses Package Auto-Discovery. So, you can skip 2 and 3 steps. Move forward to 4 stage.
Don't forget to change locale to `ru` in file `config/app.php`.

If you prefer to config package manually, just follow next steps with service provider and other.

#### 2. Define the Service Provider

Open file `config/app.php` and define new service provider

```
'providers' => [
//  other providers

/*
* Package Service Providers...
*/
Temich\Bulma\BulmaServiceProvider::class,


//  other providers
];
```

Package include language files, such as `ru.json` and other.
So, it's good point to change locale:

```
'locale' => 'ru',
```

You may use default locale or your own locale on your choice.


#### 3. Add lines to `composer.json`

Open file `composer.json` in your app root directory

```
"autoload": {
    "psr-4": {
		"Temich\\Bulma\\": "vendor/temich/bulma/src"
    }
},
```

Update the autoloader
```
composer dump-autoload
```


#### 4. Publish vendor assets.

Now it's time to publish vendor files to current application.

To replace file content you may clear `resources` directory and delete file `webpack.mix.js`.
Or you can use flag `--force` to rewrite files content:

```
php artisan vendor:publish --provider="Temich\Bulma\BulmaServiceProvider" --force
```


#### 5. Get Bulma

Get Bulma css framework and compile your assets

```
npm install bulma
npm run dev
```

**Note:** In some cases we have to download more dependencies and get error.
In this situation execute `npm run dev` one more time.

Open site in browser.

**Note:** Press Ctrl+F5 buttons in browser to clear cache for site URL.


## Usage

Blade files correspond to routes and controllers.
You are free to edit, delete or add new files.
Package is ready to use.
