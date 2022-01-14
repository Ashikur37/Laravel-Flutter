<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["name","image","category_id","user_id","short_description","description","slug","price"];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
