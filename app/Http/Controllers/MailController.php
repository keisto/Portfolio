<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageSubmitted;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

public function mail() {
    // public function mail(Request $request) {
        // $this->validate($request, [
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);

        Mail::to('keisertony@gmail.com')->send(
            new MessageSubmitted()
        );

        // return response()->json(null, 200);
    }

}
