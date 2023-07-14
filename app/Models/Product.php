<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'foto',
        // tambahkan kolom lain yang diperlukan
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}


