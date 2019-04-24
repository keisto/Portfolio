<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller {
    public function mail(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        /*
          Add mail functionality here.
        */
        return response()->json(null, 200);
    }
}
