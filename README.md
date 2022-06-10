# Laravel Bulma: Starter Kits with css framework Bulma

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


## Usage

Package is ready to use. Blade files correspond to routes and controllers.
You are free to edit, delete or add new files.
