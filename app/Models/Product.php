<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional, if not following naming conventions)
    protected $table = 'products';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'price',
        'description',
        'status'
    ];

    // Define any relationships here, e.g., if you have a ProductImage model
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
