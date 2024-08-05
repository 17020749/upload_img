<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard():View
    {
            $listProduct = Product::all();
            // dd($listProduct)
            return view('welcome', ['products' => $listProduct]);
    }
}
