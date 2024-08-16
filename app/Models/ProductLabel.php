<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLabel extends Model
{
    use HasFactory;

    protected $table ="product_labels";

    protected $fillable =[

        'name',
        'status',
        'color'
    ];

    /**
     * Get the products for the product label.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
