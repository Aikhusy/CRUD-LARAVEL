<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama extends Model
{
    
    use HasFactory;
    protected $table = 'nama';
    protected $fillable = ['nama', 'umur', 'kota'];
}
