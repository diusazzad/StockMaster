<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = ['nama','alamat','email','telepon'];

    protected $hidden = ['created_at','updated_at'];
}
