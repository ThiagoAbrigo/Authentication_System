<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'cantidad', 'categoria_id'];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoria_id', 'categoria_id');
    }
}
