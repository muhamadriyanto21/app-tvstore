<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'discount',
        'start_date',
        'end_date',
        // tambahkan kolom lain yang diperlukan
        // promo dan product many to many
        
    ];

}
