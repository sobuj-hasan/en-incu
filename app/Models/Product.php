<?php

namespace App\Models;

use App\Helpers\FileUploadHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, FileUploadHelper;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'slug',
        'price',
        'sell_price',
        'stock',
        'image',
        'short_description',
        'long_description',
        'status',
    ];

    protected $with = ['category', 'user', 'multipleimage'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function multipleimage()
    {
        return $this->belongsTo(MultipleImage::class, 'product_id');
    }



}
