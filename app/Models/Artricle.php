<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Artricle extends Model
{
    use HasFactory;

    protected $table = "articles";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
