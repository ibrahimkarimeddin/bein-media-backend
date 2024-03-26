<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id', 'level', 'discount_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }

}
