<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    function getProduct() {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }
    function getProductsbyBand(Request $request)
    {
    $band = $request->input('selectBand');
    $products = ProductModel::where('band',$band)->get();
    return view('admin.product.getProductsByBand',['Products'=>$products]);
    }
}