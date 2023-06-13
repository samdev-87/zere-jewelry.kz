<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int
     * $this->attributes['article'] - string
     * $this->attributes['name'] - string
     * $this->attributes['description'] - string
     * $this->attributes['parent'] - string
     * $this->attributes['image'] - string
     * $this->attributes['price'] - int
     * $this->attributes['created_at'] - timestamp
     * $this->attributes['updated_at'] - timestamp
     */

    protected $fillable = [
        'article',
        'name',
        'description',
        'price',
        'image',
    ];

    public static function validate($request)
    {
        $request->validate([
            'article' => 'required|max:50',
            'name' => 'required|max:150',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'image' => 'image'
        ]);
    }
}
