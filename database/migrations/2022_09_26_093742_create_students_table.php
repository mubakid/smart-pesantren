<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('nis')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rtrw')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();

            $table->string('agama')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('status_rumah')->nullable();
            $table->string('status_mukim')->nullable();

            $table->string('sekolah_asal')->nullable();
            $table->string('alamat_sekolah_asal')->nullable();
            $table->string('npsn_sekolah_asal')->nullable();
            $table->string('nsm_sekolah_asal')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('no_un')->nullable();
            $table->string('foto')->nullable();
            $table->string('foto_wali')->nullable();

            $table->string('nism')->nullable();
            $table->string('kip')->nullable();
            $table->string('pkh')->nullable();
            $table->string('kks')->nullable();
            $table->string('kk')->nullable();

            // lembaga formal dan madin
            $table->unsignedBigInteger('formal_education_id')->nullable();
            $table->unsignedBigInteger('madin_education_id')->nullable();
            // daerah dan asrama
            $table->unsignedBigInteger('dormitory_id')->nullable();
            $table->string('room')->nullable();
            // kelas madin dan rombel
            $table->unsignedBigInteger('madin_rombel_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
