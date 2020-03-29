

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
