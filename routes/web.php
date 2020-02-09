<?php

Route::post('/send-message', 'MailController@mail');

// Route::group(['prefix' => 'sandbox'], function () {
//     Route::get('/clock', function () {
//         return view('sandbox.clock');
//     });

//     Route::get('/clock', function () {
//         return view('sandbox.clock');
//     });
// });

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
