<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //view trang san pham
    public function product(){

        $query = Product::all();

        return view('client.modules.products.product.product_page',['product'=>$query]);
    }
}
