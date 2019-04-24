<?php

Route::post('/send-message', 'MailController@mail');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
