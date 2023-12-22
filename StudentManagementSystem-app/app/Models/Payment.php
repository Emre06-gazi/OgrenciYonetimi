<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'odeme';
    protected $primaryKey = 'id';
    protected $fillable = ['kayitId', 'ödemeTarihi', 'miktar'];
    use HasFactory;
}
