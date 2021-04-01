<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarenkorbController extends Controller
{
    use LoginTrait;

    public function addProduct($productId)
    {
        if (!is_array(session()->get('basket'))) {
            $basket = array();
        } else {
            $basket = session()->get('basket');
        }
        $product = \App\Models\Product::all()->where('id', $productId)->first();
        array_push($basket, $product);
        session()->put('basket', $basket);
        return redirect('/warenkorb');
    }

    public function basket()
    {
        return view('warenkorb', ['products' => session()->get('basket')]);
    }
}