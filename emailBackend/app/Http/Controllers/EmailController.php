<?php

namespace App\Http\Controllers;

use Mail;
class EmailController extends Controller
{
    public function postEmail(Request $request) {
        $data = array('email' => $request->get('txtEmail'), 'name' => $request->get('txtName'));
        Mail::send('emails', ['data' => $data], function($mess) use ($data){
            $mess->to($data['txtEmail'])
                ->subject('Cảm ơn bạn');
        });
    }
}
