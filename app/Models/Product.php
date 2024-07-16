<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_view_description',
        'product_details',
        'product_features',
        'product_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
