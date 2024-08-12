<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'ci', 'paterno', 'materno', 'nombre', 'id_user'
    ];

}
