<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditRouteUser extends Controller
{
    public function profileInformation(){

        return view('profile.partials.update-profile-information-form');
    }
}
