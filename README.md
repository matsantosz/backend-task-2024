# Search and Stay Backend Task

### Setup

```bash
git clone git@github.com:matsantosz/backend-task-2024.git
cd backend-task-2024
composer install
php artisan migrate --seed
```

This will setup the application and create a testing user with the following credentials:

E-mail: *test@example.com*
Password: *password*

Now go ahead and serve the application using artisan or similar solution.

```bash
php artisan serve
```

### Testing the API

Use the client of your choice. e.g. Postman, Isomnia, Thunder Client.

#### Authentication

The routes in this API are protected by authentication, luckily it is very easy to login and logout:

*POST http://localhost:8000/api/login*
{
    "email": "test@example.com",
    "password": "password"
}

*POST http://localhost:8000/api/logout*

The login endpoint will respond with a Bearer Token that you should copy and use it for Authentication from now on. The logout endpoint will erase these tokens and make it unusable.

#### CRUDS

After logging in, you can now test any endpoint available:

###### Book

*GET http://localhost:8000/api/books*
Fetch all books registered.

*POST http://localhost:8000/api/books*
Register a new book, requires name, isbn and value fields.

*GET http://localhost:8000/api/books/{book}*
Fetch a book by id and its related stores.

*PUT http://localhost:8000/api/books/{book}*
Update a book by id, accepts name, isbn or value fields but it's optional.

*DELETE http://localhost:8000/api/books/{book}*
Delete a book by id completely.

###### Store

*GET http://localhost:8000/api/stores*
Fetch all stores registered.

*POST http://localhost:8000/api/stores*
Register a new store, requires name and address fields. The active field is optional and it is true by default.

*GET http://localhost:8000/api/stores/{store}*
Fetch a store by id and its related books.

*PUT http://localhost:8000/api/stores/{store}*
Update a store by id, accepts name, address or active fields but it's optional.

*DELETE http://localhost:8000/api/stores/{store}*
Delete a store by id completely.

###### Relationships

If you have a book and a store, you can attach or detach them to each other.

*POST http://localhost:8000/api/books/{book}/stores/{store}*
Attach specified book with the specified store.

*DELETE http://localhost:8000/api/stores/{store}/stores/{store}*
Detach specified book with the specified store.

*POST http://localhost:8000/api/stores/{store}/books/{book}*
Attach specified store with the specified book.

*DELETE http://localhost:8000/api/stores/{store}/books/{book}*
Detach specified store with the specified book.
