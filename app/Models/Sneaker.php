<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    use HasFactory;
    protected $fillable = ['nombre',
    'marca', 'precio', 'talla', 'stock'];

    public $timestamps = false;

    //Un sneaker puede ser vendido muchas veces
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
