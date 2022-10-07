<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Family;
use App\Models\Dormitory;
use App\Models\MadinEducation;
use App\Models\FormalEducation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nik',
    //     'nis',
    //     'hp',
    //     'tempat_lahir',
    //     'tanggal_lahir',
    //     'jenis_kelamin',
    //     'alamat',
    //     'rtrw',
    //     'desa',
    //     'kecamatan',
    //     'kota',
    //     'provinsi',
    //     'kode_pos',
    //     'agama',
    //     'hobi',
    //     'cita_cita',
    //     'kewarganegaraan',
    //     'kebutuhan_khusus',
    //     'status_rumah',
    //     'status_mukim',
    //     'sekolah_asal',
    //     'alamat_sekolah_asal',
    //     'npsn_sekolah_asal',
    //     'nsm_sekolah_asal',
    //     'no_ijazah',
    //     'no_un',
    //     'foto',
    //     'foto_wali',
    //     'nism',
    //     'kip',
    //     'pkh',
    //     'kks',
    //     'formal_education_id',
    //     'madin_education_id',
    //     'dormitory_id',
    //     'room',
    //     'madin_rombel_id',
    // ];
    protected $guarded = [];

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
    public function age()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->age;
    }
}
