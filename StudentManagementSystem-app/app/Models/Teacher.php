<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'ogretmen';
    protected $primaryKey = 'id';
    protected $fillable = ['adSoyad', 'adres', 'telefon'];
    use HasFactory;
}
