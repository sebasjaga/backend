<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
        'id_categoria',
        'nombre_categoria'
    ];

    public $timestamps = false;

    
}