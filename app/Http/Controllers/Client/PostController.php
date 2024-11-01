<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryPost;

class PostController extends Controller
{
    //view trang bai viet
    public function categoryPosts(){

        $query = CategoryPost::all();

        return view('client.modules.posts.category.categoryPost',['posts'=>$query]);
    }
}
