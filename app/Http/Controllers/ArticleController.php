<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\TestUser;

class ArticleController extends Controller
{
    //
    public function addArticle(){

        //    $article = new Article;

        //    $article ->title = "first article title";
        // $article-> discription = "first article description";
        // $article->save();
        return Article::find(1);//"Article has been created successfully";
    }

    public function addCategory(){

        $article = new Article;

        $article ->title = "first article title";
     $article-> discription = "first article description";
     $article->save();
     return "Article has been created successfully";
 }



}



