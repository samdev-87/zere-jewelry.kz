<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'name', 'vendor', 'size', 'average_weight', 'insert', 'sample', 'picture_path', 'catalog_id', 'new', 'p_group'];

    public function catalog(): BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }
}
