<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Catalog extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'uuid', 'picture_path'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
