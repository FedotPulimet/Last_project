<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function show($painting_id)
    {
       
        return view('order.form', ['painting_id' => $painting_id]);
    }

}