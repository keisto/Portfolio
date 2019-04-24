<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageSubmitted;
use Illuminate\Support\Facades\Mail;
''
class MailController extends Controller {

    // public function mail(Request $request) {
    //     $this->validate($request, [
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //     ]);
    //
    //     Mail::to('keisertony@gmail.com')->from($request->email, $request->name)->send(
    //         new MessageSubmitted($request)
    //     );
    //
    //     return response()->json(null, 200);
    // }
    //
    public function mail() {
        Mail::to('keisertony@gmail.com')->replyTo('someone@g.com', 'Some Thing')->send(
                new MessageSubmitted('Hello World!123')
            );
    }
}
