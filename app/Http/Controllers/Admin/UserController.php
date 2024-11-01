<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listUser(){

       $data = User::all();

       return view('admin.modules.users.user',['list'=>$data]);
    }
}
