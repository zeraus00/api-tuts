<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    public $table = "employees";
    protected $fillable = [
        'name',
        'email',
        'position',
    ];
}
