<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Batch extends Model
{
    protected $table = 'sinav';
    protected $primaryKey = 'id';
    protected $fillable = ['sinavAdi', 'dersId', 'baslangicTarihi'];
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
