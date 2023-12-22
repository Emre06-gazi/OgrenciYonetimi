<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'dersler';
    protected $primaryKey = 'id';
    protected $fillable = ['dersAdi', 'müfredat', 'süre'];
    use HasFactory;

    public function süre()
    {
        return $this->süre. " Saat";
    }
}
