<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUser;

class TestUserController extends Controller
{
    public function viewUser(){

        
        return TestUser::find(2);
    }


}
