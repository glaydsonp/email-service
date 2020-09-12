<?php

use App\Http\Controllers\ZeniteContatoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ZeniteContactForm;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/contato-zenite', 'ZeniteContatoController@store');
