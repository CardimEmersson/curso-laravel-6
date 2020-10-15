<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//funciona com ou sem parametros
Route::get('/categoria/{flag?}', function ($flag = ''){
    
    return "Produtos(s) {$flag}";
});

//passando parametros via url
Route::get('/categoria/{flag}', function ($flag){
    
    return "Produtos da categoria {$flag}";
});

// match: Permite escolher os metodos que serão utilizados nessa rota
Route::match(['get', 'post'],'/match', function (){
    return 'match';
});

//any: qualquer metodo http
Route::any('/any', function () {
    return 'any';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contact');
});

//view simplificado
Route::view('/view', 'welcome');


//redicionamento
// Route::get('/redirect1', function (){
    
//     return redirect('/redirect2');
// });

Route::get('/redirect2', function (){
    
    return "redirect2";
});
//outra forma redirecionamento:
Route::redirect('/redirect1','/redirect2');

//nomeando rotas/ auxilia na refotaração de codigo, caso precise mudar o nome da rota 
Route::get('/redirect3', function (){

    return redirect()->route('url.name');
});

Route::get('/nome-url', function () {
    return 'teste';
})->name('url.name');


//Grupo de rotas e prefixo
Route::get('/login', function (){
    // return "Login";
})->name('login');

// Route::middleware([])->group(function () {

//     Route::prefix('admin')->group(function () {

//         Route::namespace('Admin')->group(function () {
 
//             Route::name('admin.')->group(function () {

//                 Route::get('/', function () {
//                     return redirect()->route('admin.dashboard');
//                 })->name('home');
            
//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                
//                 Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
            
//                 Route::get('/produto', 'TesteController@teste')->name('produto');
                
//             });
//         });
//     });
// });

//
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'admin',
    'name' => 'admin.'
], function () {

        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        })->name('home');
    
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        
        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
    
        Route::get('/produto', 'TesteController@teste')->name('produto');

});


//Rota que chama o ProductController

Route::resource('products', 'ProductController');

//Cria o controller com os metodos prontos
//php artisan make:controller ProductController --resource

// Route::get('/products', 'ProductController@index')->name('product.index');
// Route::get('/products/{id}', 'ProductController@show')->name('product.show');
// Route::get('/products/create', 'ProductController@create')->name('product.create');
// Route::get('/products/{id}/edit', 'ProductController@edit')->name('product.edit');
// Route::post('/products/store', 'ProductController@store')->name('product.store');
// Route::put('/products/{id}', 'ProductController@update')->name('product.update');
// Route::delete('/products/{id}', 'ProductController@update')->name('product.update');

//MIDDLEWARE

// Route::resource('product', 'ProductController');






