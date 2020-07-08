 <h1>FotolabLAR2</h1>


## Projekt FotolabLAR2
### cel
1. publikacja w XAMPP
2. pubikacja w Hekko
3. dołaczenie css i js do wszystkich stron
4. wprowadzenie danych przez formularz
5. wyświetlenie danych w formularzu
6. serwice REST w PHP

### funkcjonalność
##### struktura bazy danych
[baza danych](DATABASE.md)
##### obsługa danych

wprowadzanie, wyświetlanie i edycja 
1. producenci
2. filmy
3. chemikalia

* wprowadzanie nowego wywolania 
    - wybór filmu
    - wybór chemi
    - wybor rozcienczenia
    - wprowadzenie czasu
    - dodawanie plików
    
* wyświetlenie wywołania
    - wybór filmu
    - wybór wywoływacza
    - wybór rozcieńczenia
    - wyświetlenie czasu
    - wyświetlenie zdjęć
    
## Realizacja

[szczegóły w pliku NOTATKI](NOTATKI.md)

* publikacja w XAMPP
    - kopiuję katalog projektu do xampp
    <C:\xampp\htdocs\FOTOLABLAR2>
    pod adresem
    <http://127.0.0.1/FOTOLABLAR2/> mam dostęp do wszystkich katalogów projektu
    
    dostep do aplikacji Laravel
    http://127.0.0.1/FOTOLABLAR2/public/ 
    
 
#### przykładowe wywołanie API
http://127.0.0.1:8000/filmy/
#### wynik

`[
     {
         "ID": 1,
         "typ": "35 mm cz-b",
         "nominal_asa": "200",
         "exp_date": "",
         "seria": "",
         "producent": 1,
         "nazwa": "RETROPAN 320 soft ",
         "etykieta": null,
         "ulotka": null,
         "opis": null,
         "symbol": "FOMA320",
         "link": null,
         "fot": "FomaRetropan320_one.jpg",
         "katalog": "/"
     },...]`



## API
    Filmy
    Metoda	Ścieżka	            opis
    GET	/	                Index
    GET	/filmy	              Lista filmów
    GET	/filmy/create	     formularz do utworzenia filmu
    POST    /filmy	             Zapis nowego filmu
    GET     /filmy/{id}          szczegóły jednego filmu 
    GET     /filmy/{id}/edit    formularz do edycji  filmu 
    PUT     /filmy/{film}       aktualizacja filmu
    DELETE  /filmy/{id}     usunięcie filmu
    

    		

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

 
