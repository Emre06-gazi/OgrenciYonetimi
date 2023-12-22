<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Batch;

class Enrollment extends Model
{
    protected $table = 'kayit';
    protected $primaryKey = 'id';
    protected $fillable = ['kayitNo', 'sinavId', 'ogrenciId', 'katilmaTarihi', 'ücret'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
