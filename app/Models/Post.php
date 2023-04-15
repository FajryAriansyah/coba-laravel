<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable= ['title', 'excerpt', 'body']; // Fillabel berrti field ini boleh diisi dan yang lainnya tidak
    protected $guarded =["id"]; // guarded berrti field ini TIDAK boleh diisi dan yang lainnya boleh

    protected $with = ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}


