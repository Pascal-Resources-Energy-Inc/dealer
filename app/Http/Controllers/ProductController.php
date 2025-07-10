<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('products', compact('products'));
    }

    public function popular()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('popular', compact('products'));
    }
}
