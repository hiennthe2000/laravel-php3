<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\CategoryProduct;

class HomeController extends Controller
{
//    View trang chủ
    public function index(){

        $data = CategoryProduct::all();
        $query2 = Product::all();

        return view('client.index', ['product' => $data],['product2'=> $query2]);
    }
//View trang gioi thieu
    public function about(){

        return view('client.modules.about');
    }

    //view trang lien he
    public function contact(){

        return view('client.modules.contact');
    }
}
