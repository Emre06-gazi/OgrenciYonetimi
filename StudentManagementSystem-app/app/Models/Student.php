<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'ogrenci';
    protected $primaryKey = 'id';
    protected $fillable = ['adSoyad', 'adres', 'telefon'];
    use HasFactory;
}
