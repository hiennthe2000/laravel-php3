<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Product;

class ArchiveController extends Controller
{
    public function categoryPost($id){

        $postModel = new Post();
        $data = $postModel->getDetailType($id);

        return view('client.modules.posts.post.post_page',['posts2'=>$data]);
    }

    public function detailsPost($id){

        $postModel = new Post();
        $data = $postModel->getDetailNews($id);

        return view('client.modules.posts.post.single_post',['posts3'=>$data]);

    }

    //chi tiet loai san pham
    public function categoryProduct($id){

        $productModel = new Product();
        $data = $productModel->getDetailCategoryProduct($id);

        return view('client.modules.products.product.details_product_index',['category'=>$data]);
    }

    public function detailsProduct($id){

        $productModel = new Product();
        $data = $productModel->getDetailProduct($id);

        return view('client.modules.products.product.single_product',['product'=>$data]);
    }

}
