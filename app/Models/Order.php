<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';

    static $rules = [
        'price' => 'required',
        'client_id' => 'required',
    ];

    protected $perpage = 20;

    protected $fillable = ['price','client_id'];

    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }

}
