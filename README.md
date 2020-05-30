1.	Composer installieren
2.	Repo clonen
3.	.env Datei anpassen
4.	"composer update" ausführen
5.	"php artisan generate:key" ausführen
6.	"php artisan migrate" ausführen
7.	"php artisan serve" ausführen zum starten der API)
8.  Registrieren
    -	Url: http://localhost:8000/api/register
    -	Method: POST
    -   Parameter: name, email, password, c_password
9.  Login
    -	Url: http://localhost:8000/api/login
    -	Method: POST
    -   Parameter: email, password
10. Token nach dem Login/Registrieren irgentwo zwischenspeichern
11. Endpoints:
    - WICHTIG:
        Headers so übergeben und <TOKEN> durch den gespeicherten TOKEN vom Login/Register ersetzen:
        <img src="https://i.imgur.com/FOrfcg3.png">
    - products
        - Method: GET, URL: http://localhost:8000/api/products
        - Method: GET, URL: http://localhost:8000/api/products/{id}
        - Method: POST, URL: http://localhost:8000/api/products
        - Method: PUT, URL: http://localhost:8000/api/products/{id}
        - Method: DELETE, URL: http://localhost:8000/api/products/{id}
    - categories
        - Method: GET, URL: http://localhost:8000/api/categories
        - Method: GET, URL: http://localhost:8000/api/categories/{id}
        - Method: POST, URL: http://localhost:8000/api/categories
        - Method: PUT, URL: http://localhost:8000/api/categories/{id}
        - Method: DELETE, URL: http://localhost:8000/api/categories/{id}
    - producers
        - Method: GET, URL: http://localhost:8000/api/producers
        - Method: GET, URL: http://localhost:8000/api/producers/{id}
        - Method: POST, URL: http://localhost:8000/api/producers
        - Method: PUT, URL: http://localhost:8000/api/producers/{id}
        - Method: DELETE, URL: http://localhost:8000/api/producers/{id}
    - customers
        - Method: GET, URL: http://localhost:8000/api/customers
        - Method: GET, URL: http://localhost:8000/api/customers/{id}
        - Method: POST, URL: http://localhost:8000/api/customers
        - Method: PUT, URL: http://localhost:8000/api/customers/{id}
        - Method: DELETE, URL: http://localhost:8000/api/customers/{id}
    - addresses
        - Method: GET, URL: http://localhost:8000/api/addresses
        - Method: GET, URL: http://localhost:8000/api/addresses/{id}
        - Method: POST, URL: http://localhost:8000/api/addresses
        - Method: PUT, URL: http://localhost:8000/api/addresses/{id}
        - Method: DELETE, URL: http://localhost:8000/api/addresses/{id}
    - cartitems
        - Method: GET, URL: http://localhost:8000/api/cartitems
        - Method: GET, URL: http://localhost:8000/api/cartitems/{id}
        - Method: POST, URL: http://localhost:8000/api/cartitems
        - Method: PUT, URL: http://localhost:8000/api/cartitems/{id}
        - Method: DELETE, URL: http://localhost:8000/api/cartitems/{id}
