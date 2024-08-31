<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.categories.index');
    }

    public function product()
    {
        return view('frontend.product.index');
    }
}
