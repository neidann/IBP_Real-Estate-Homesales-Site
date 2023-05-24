<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }
}
