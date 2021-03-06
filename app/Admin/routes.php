<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products', ProductController::class);
    $router->resource('users', UserController::class);
    $router->resource('blogs', BlogController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('sites', SiteController::class);
    $router->resource('bills', BillController::class);
    $router->resource('authors', AuthorController::class);
    $router->resource('nxbs', NxbController::class);


});
