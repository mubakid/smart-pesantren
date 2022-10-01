<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormalEducation extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'formal_education';
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
