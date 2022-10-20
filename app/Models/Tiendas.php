<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    use HasFactory;

    protected $table = 'tb_tiendas';
    protected $primaryKey = 'id_tiendas';
    protected $fillable = [
        'clave',
        'nombre',
        'foto'
    ];
}
