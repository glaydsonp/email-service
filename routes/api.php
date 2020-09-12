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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/contato-zenite', function () {
    $email = "contact@glaydsonp.com";
    $mailid = $email;
    $subject = 'News Information.';
    $data = array('email' => $mailid, 'subject' => $subject);
    Mail::send('emails.zenite', $data, function ($message) use ($data) {
        $message->from('zenite-teste@glaydsonp.com', 'News Information');
        $message->to("contact@glaydsonp.com");
        $message->subject("teste email");
    });
    return 'ok';
});

// Route::post('/teste', 'ZeniteContatoController');
Route::post('/teste', 'ZeniteContatoController@store');
