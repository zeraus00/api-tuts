<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = "flights"; //defines the table that will be use in the model
    // public $timestamps = false; if table don't have 'created at'
}
