<?php

namespace App\Models;

use App\Models\Student;
use App\Models\MadinRombel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MadinEducation extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected $table = 'madin_education';
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function rombel()
    {
        return $this->hasMany(MadinRombel::class);
    }
}
