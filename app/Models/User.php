<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name', 'password', 'id_person'
    ];

}
