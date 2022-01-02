<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myvocab extends Model
{
    use HasFactory;
    
    protected $table = 'vocab';
    public $timestamps = false;
    protected $fillable = ['id','vocab','sentence'];
}
