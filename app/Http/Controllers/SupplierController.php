<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index()
    {
        $supplier=Supplier::Paginate(1);
        return view('contents.supplier', [
            'title' => 'Supplier',
            'supplier' => $supplier
        ]);
    }
}
