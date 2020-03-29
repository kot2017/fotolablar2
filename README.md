 <h1>FotolabLAR2</h1>

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

## Projekt FotolabLAR2
### cel
1. publikacja w XAMPP
2. pubikacja w Hekko
3. dołaczenie css i js do wszystkich stron
4. wprowadzenie danych przez formularz
5. wyświetlenie danych w formularzu

### funkcjonalność
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
* publikacja w XAMPP
    - kopiuję katalog projektu do xampp
    <C:\xampp\htdocs\FOTOLABLAR2>
    pod adresem
    <http://127.0.0.1/FOTOLABLAR2/> mam dostęp do wszystkich katalogów projektu
    
    dostep do aplikacji Laravel
    http://127.0.0.1/FOTOLABLAR2/public/ 
    
    


## API
    Producent
    Metoda	Ścieżka	opis
    GET	/	                Index
    GET	/producent	        Lista producentów
    GET	/producent/detal/{nazwa} 	Szczegóły producenta
    GET	/producent/detal/{id}	Szczegóły producenta
    GET	/producent/create	Formularz do tworzenia producenta
    POST	/producent	        Zapis nowego producenta
    		


 
