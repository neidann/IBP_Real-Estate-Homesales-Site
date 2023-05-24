<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function gallery(){
        return $this->hasMany(PropertyGallery::class,"property_id","id");
    }
}
