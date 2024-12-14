<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alegretp extends Model
{
    use HasFactory;
    protected $table = 'alegre';
    protected $fillable = ['name', 'email'];
}
