<?php

namespace App\Models;

use App\Models\Family;
use App\Models\Dormitory;
use App\Models\MadinEducation;
use App\Models\FormalEducation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['a_kk'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    // public function ExitPermits()
    // {
    //     return $this->hasMany(ExitPermit::class);
    // }
    public function madinEducation()
    {
        return $this->belongsTo(MadinEducation::class);
    }

    public function formalEducation()
    {
        return $this->belongsTo(FormalEducation::class);
    }
    public function family()
    {
        return $this->hasOne(Family::class);
    }

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class);
    }
}
