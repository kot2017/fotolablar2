#Notatki

[powrot](README.md)


![routing](images/rys_routing.png)

## dodanie Bootstrap

composer require laravel/ui

php artisan ui bootstrap

php artisan ui react


===========
## dodanie stylów utworzonych w Artisteer

* katalog
    - public/css
    - public/images

``
` <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">``

    <img width="200" height="200" alt="" class="art-lightbox" **src="{{ URL::asset('images/pr.jpg') }}"**>`

## mapowanie ORM bazy

`composer require reliese/laravel`

After that, you will need to register the service provider:

`Reliese\Coders\CodersServiceProvider::class`

And publish the configuration file:

`php artisan vendor:publish --tag=reliese-models`

Now you are ready to use it. Just make sure you have configured your database and you can
safely issue the command:

`php artisan code:models`

## controlery REST

`php artisan make:controller ProducentController --resource`

php artisan make:controller FilmyController --resource

php artisan make:controller ChemikaliaController --resource

php artisan make:controller WywolaniaController --resource

php artisan make:controller WynikiController --resource


## controlery WEB

`php artisan make:controller ProducentWebController`

Metody wpisane ręcznie odpowiednio do widoków i funkcji
