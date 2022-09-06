<h1>BookStore</h1>

BookStore is a simple search functionality project developed in ```Laravel 9``` and ``` Vuejs 3```.
In this project Admin can login and view all list of books and can add new book, edit book or delete book.

Dummy Admin login Credential
Email: ```test@example.com``` Password: ```12345678```


### Installation - Laravel

Here is step by step process of implementation:

Run these commands on your terminal

Git Clone: ```git clone https://github.com/bagorajitendra/bookstore-laravel-vuejs.git```

```cd bookstore-laravel-vuejs```

```composer install``` for installing dependencies

```cp .env.example .env```

Create Database and set env variable 

Now its time to Migrate Database tables and DB Seed by running artisan commands

```php artisan migrate```

```php artisan db:seed```

Laravel Setup done! Its time to work on vuejs.

### Installation - Vuejs

We have to install Node package manager for running vue js project 

```npm install```

by installing node modules Vuejs will setup successfully.

------------------------------------------------------------

Run both laravel and vuejs by their run command separately

Laravel: ```php artisan serve```

Vuejs: ```npm run dev```

project can be accessed by http://localhost:8000 url

### APIs 

```APP_URL = http://localhost:8000```

```
1. GET:APP_URL/api/books/

Response: All Books 

```

```
2. GET: APP_URL/api/books/search/{search_query:any}

Response: Search Results
```

