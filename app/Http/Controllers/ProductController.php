<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Gitar'],
            ['id' => 2, 'produk' => 'Biola'],
            ['id' => 3, 'produk' => 'Drum'],
        ];

        return view('list_product', compact('data'));
    }
}
