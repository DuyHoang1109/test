<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class PageController extends Controller
{
    public function hello()
    {
        return 'helloooo abc';
    }

    public function showView1()
    {
        return view('view1');
    }

    public function showView2($name = 'Nguyen Duy Hoang')
    {
        return view('view2', ['name' => $name]);
    }

    public function showProducts(){
        $products = products::getAll();
        return view('products', ['products' => $products]);
    }
}
