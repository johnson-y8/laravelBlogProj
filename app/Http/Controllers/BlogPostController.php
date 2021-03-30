<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;


class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();

        return view('index', ['posts' => $posts]);
    }


    public function addPost(Request $request)
    {
        $post = new BlogPost;
        $post->title = $request->title;
        $post->contributor = $request->contributor;
        $post->description = $request->description;
        $post->save();
        
        return "Post added successfully";
    }
    
    public function updatePost($id, Request $request)
    {
        $post = new BlogPost;
        
        $post = BlogPost::find($id);
        
        $post->title = $request->title;
        $post->contributor = $request->contributor;
        $post->description = $request->description;
        
        $post->save();
        
       return redirect(route('single',[$id] ));
    }

 
    public function editPost($id)
    {
        $post = new BlogPost;
        
        $post = BlogPost::find($id);
        
        
        return view('editpost', ['post' => $post]);
    }
/////////////////////////////////////////////////////////
    public function editP($id)                        ///
    {                                                 ///
      $post = BlogPost::find($id);                    ///
                                                      ///
        return view('editPst', ['test' => $post]);    ///
    }                                                 ///
/////////////////////////////////////////////////////////

    public function deletePost($post_id)
    {
       
        $post = BlogPost::find($post_id);

        $post->delete();
        
        //"Post deleted successfully";
        return redirect(route('index')); 
    }
  
}
//////////////////////////////////////////////////////////////
//instead of passing an array, you can use a compact('key') //
//////////////////////////////////////////////////////////////