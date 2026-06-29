<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractuals extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'users';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
