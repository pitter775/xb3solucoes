<?php

use App\Mail\newEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {return view('pages.site');});
Route::get('/pesquisa/{id}', 'App\Http\Controllers\Pesquisa@index')->name('pesquisa');
Route::get('/teste', function () {return 'teste';});
Route::post('/envio-email', function (Request $request) {
    $user = new stdClass();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->mensagem = $request->message;
    $user->titulo = $request->subject;

    Mail::send(new newEmail($user));
    // return new newEmail($user);
});


