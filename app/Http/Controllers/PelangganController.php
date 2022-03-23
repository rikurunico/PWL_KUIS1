<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::paginate(5);
        return view('contents.pelanggan', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan
        ]);
    }
}
