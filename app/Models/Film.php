<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "release_date", "director_id", "category_id", "tags", 'image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function director(){
        return $this->hasOne(Director::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
