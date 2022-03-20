<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class StuffController extends Controller
{
    public function index()
    {
        $barang = Barang::paginate(3);
        return view('contents.services', [
            'title' => 'Stuff',
            'barang'=> $barang
        ]);
    }
}
