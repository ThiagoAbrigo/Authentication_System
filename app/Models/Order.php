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

    protected $fillable = ['precio','cliente_id'];

    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'client_id');
    }

}
