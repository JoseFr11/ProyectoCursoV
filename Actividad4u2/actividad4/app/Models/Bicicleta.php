<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    use HasFactory;
    protected $table = 'bici';
    protected $fillable = ['marca','rodado','stock','precio'];
    protected $hidden = ['created_at','updated_at'];
}
