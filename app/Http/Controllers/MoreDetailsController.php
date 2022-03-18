<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreDetailsController extends Controller
{
    public function index()
    {
        return view('more-details', [
            'title' => 'More Details',
        ]);
    }
}
