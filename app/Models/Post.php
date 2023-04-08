<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //yang bisa diisi   
    // protected $fillable = ['title', 'excerpt', 'body'];

    //yang tidak boleh diisi
    protected $guarded = ['id'];

    //relasi antar model post dan model category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
