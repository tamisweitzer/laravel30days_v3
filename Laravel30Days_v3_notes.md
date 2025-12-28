# Options for making routes.

Return a view using the function syntax.

```php
Route::get('/', function() {
return view('home');
});
```

Return a controller and method name.

```php
Route::get('/', [RegisteredUserController::class, 'home']);
```

When the route just needs to return a view, a faster syntax is to use the Route::view() method.

```php
Route::view('/', 'home');
```

Group all routes inside a controller group function.

```php
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index');
    Route::get('/blog/{id}', 'show');
    Route::get('/blog/create', 'create');
});
```

Register all typical routes associated with a controller.
** Be sure to follow routing conventions so that this will work. **

```php
Route::resource('jobs', OurJobController::class);
```

# Hostinger

To manage migrations, et al, at Hostinger, first SSH into the account, then `cd` to the appropriate directory and run your artisan commands.
