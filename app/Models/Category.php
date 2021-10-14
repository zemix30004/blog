<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    protected $model = Category::class;
}
