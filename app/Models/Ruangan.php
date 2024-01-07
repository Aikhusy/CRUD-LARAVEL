<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table="ruangans";
    protected $fillable=["nama_ruangan","kode_ruangan","apakah_ditempati","total_kursi"];
}
