<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function submit(Request $request) {
    
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        return redirect()->route('contact')->with('success', 'Ваше сообщение отправлено!');
    }
}
