<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestiController extends Controller
{
    public function index()
    {
        return view('contents.testimonial', [
            'title' => 'Portofolio',
        ]);
    }
}
