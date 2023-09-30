<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'precio', 'cantidad', 'categoria_id'];
    protected $guarded = [];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoria_id', 'categoria_id');
    }
}
