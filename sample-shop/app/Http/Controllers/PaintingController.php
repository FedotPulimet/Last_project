<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painting;

class PaintingController extends Controller
{
    public function index()
    {
        $paintings = Painting::all(); 
        return view('products.index', compact('paintings'));
    }
}
