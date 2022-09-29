<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function biodata()
    {
        $student = Student::where('user_id', Auth::user()->id)->first();
        return inertia('Student/Biodata', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;
        $data['nis'] = IdGenerator::generate(['table' => 'students', 'field' => 'nis',  'length' => 8, 'prefix' => date('y')]);
        $student = Student::create($data);

        $family = new Family;
        $family->student_id = $student->id;
        $family->a_nik = $request->a_nik;
        $family->a_nama = $request->a_nama;
        $family->a_pekerjaan = $request->a_pekerjaan;
        $family->a_pendidikan = $request->a_pendidikan;
        $family->a_phone = $request->a_phone;
        $family->a_penghasilan = $request->a_penghasilan;
        $family->i_nik = $request->i_nik;
        $family->i_nama = $request->i_nama;
        $family->i_pekerjaan = $request->i_pekerjaan;
        $family->i_pendidikan = $request->i_pendidikan;
        $family->i_phone = $request->i_phone;
        $family->w_hubungan_wali = $request->w_hubungan_wali;
        $family->w_nik = $request->w_nik;
        $family->w_nama = $request->w_nama;
        $family->w_pekerjaan = $request->w_pekerjaan;
        $family->w_penghasilan = $request->w_penghasilan;
        $family->save();

        $user->syncRoles('santri_baru');
        // sleep(2);
        return Redirect::route('tamu.reg-lembaga');
    }


    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
