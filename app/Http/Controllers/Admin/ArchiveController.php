<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Product;

class ArchiveController extends Controller
{
    //chi tiet loai tin
    public function deltailtype($id){

        $postModel = new Post();
        $deltail = $postModel->getDetailType($id);

        return view('admin.modules.posts.category.detailCategory',['deltails'=>$deltail]);
    }
//chi tiet tin
    public function deltailNews($id){

       $postModel = new Post();
       $deltail = $postModel->getDetailNews($id);

        return view('admin.modules.posts.post.detailPost',['posts'=>$deltail]);
    }


    //chi tiet loai san pham
    public function categoryProduct($id){

        $productModel = new Product();
        $data = $productModel->getDetailCategoryProduct($id);

        return view('admin.modules.products.category.detailsCategoryProduct',['product'=>$data]);
    }

    public function deltailProduct($id){

        $productModel = new Product();
        $data = $productModel->getDetailProduct($id);

        return view('admin.modules.products.product.detailsProduct',['product2'=>$data]);
    }
}
