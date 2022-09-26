<?php

use App\Models\Student;
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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class);
            $table->string('a_kk')->nullable();
            $table->string('a_nik')->nullable();
            $table->string('a_nama')->nullable();
            $table->string('a_pekerjaan')->nullable();
            $table->string('a_pendidikan')->nullable();
            $table->string('a_phone')->nullable();
            $table->string('a_penghasilan')->nullable();
            $table->string('i_nik')->nullable();
            $table->string('i_nama')->nullable();
            $table->string('i_pekerjaan')->nullable();
            $table->string('i_pendidikan')->nullable();
            $table->string('i_phone')->nullable();
            $table->string('w_hubungan_wali')->nullable();
            $table->string('w_nik')->nullable();
            $table->string('w_nama')->nullable();
            $table->string('w_pekerjaan')->nullable();
            $table->string('w_penghasilan')->nullable();
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
        Schema::dropIfExists('families');
    }
};
