<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use Livewire\ShoppingCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

Route::group(['prefix' => 'shop'], function(){
    // Tienda de Productos...
    Route::group(['namespace' => 'Controllers'], function(){
        Route::get('', WelcomeController::class)->name('shop');
        Route::get('search', SearchController::class)->name('search');
        Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('products/{product}', [ProductController::class,'show'])->name('products.show');
    });

    // Carrito de Compras...
    Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');
});

// Login Clientes...
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $categories = Category::all();
    return view('welcome', compact('categories'));
})->name('dashboard');

//require_once __DIR__ . '/jetstream.php';

// Eliminar productos del carro...
Route::get('prueba', function () {
    Cart::destroy();
});

// Principal...
Route::get('', function(){
    return view('ecommerce');
})->name('index');

// Reservar Cita...
Route::get('ReservarCita', [CitasController::class, 'index'] )->name('citas.index');
Route::get('ReservarCita/Create', [CitasController::class, 'create'] )->name('citas.create');
Route::post('ReservarCita', [CitasController::class, 'store'] )->name('citas.store');
Route::get('ReservarCita/Show', [CitasController::class, 'show'] )->name('citas.show');

// Admin Routes...
Route::group(['prefix' => 'admin', 'namespace' => 'Controllers\Admin', 'middleware' => 'auth:workers'], function(){
    Route::group(['middleware' => 'cached'], function(){
        //Principal Administración...
        Route::get('', 'DashboardController@index')->name('admin');

        //Citas...
        Route::group(['prefix' => 'citas'], function(){
            Route::get('', 'QuotesController@index')->name('admin.quotes.index');
            Route::get('editar/{id}', 'QuotesController@edit')->name('admin.quotes.edit');
            Route::post('actualizar', 'QuotesController@update')->name('admin.quotes.update');
            Route::post('enviar-email', 'MessageController@store')->name('admin.messages.store');
        });

        //Usuarios...
        Route::group(['prefix' => 'usuarios'], function(){
            Route::get('', 'WorkersController@index')->name('admin.users.index');
            Route::post('', 'WorkersController@store')->name('admin.users.store');
            Route::get('eliminar/{id}', 'WorkersController@destroy')->name('admin.users.destroy');
            Route::get('editar/{id}', 'WorkersController@edit')->name('admin.users.edit');
            Route::post('actualizar', 'WorkersController@update')->name('admin.users.update');
        });
    });
});

//Autenticación de Trabajadores
Route::group(['namespace' => 'Controllers\Auth'], function(){
    // Login Routes...
    Route::get('admin/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'AdminLoginController@login');

    // Logout Routes...
    Route::post('admin/logout', 'AdminLoginController@logout')->name('admin.logout');

    //Auth::routes();
});
