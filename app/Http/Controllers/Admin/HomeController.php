<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.home', compact('products'));
    }
}
