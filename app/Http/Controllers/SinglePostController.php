<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class SinglePostController extends Controller
{
    public function getPost($post_id)
    {
       $item = BlogPost::where('id', $post_id)->first();
       
       return view('singlePost', ['item'=> $item]);
        
    }
}
