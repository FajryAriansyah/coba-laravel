<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable= ['title', 'excerpt', 'body']; // Fillabel berrti field ini boleh diisi dan yang lainnya tidak
    protected $guarded =["id"]; // guarded berrti field ini TIDAK boleh diisi dan yang lainnya boleh


    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search'] : false){ // periksa bila ada 'search'
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%'); // menfilter posts
        // }


        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%'); // menfilter posts
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)  
            )
    );

    }

    protected $with = ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}


