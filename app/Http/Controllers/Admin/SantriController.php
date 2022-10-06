<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Dormitory;
use App\Models\Family;
use App\Models\FormalEducation;
use App\Models\MadinEducation;
use App\Models\MadinPresensi;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SantriController extends Controller
{
    public function index(Request $req)
    {
        $perPg = $req->input('perPage') ?: 5;
        return Inertia::render('Santri/Index', [
            'students' => Student::query()
                ->when($req->input('search'), function ($query, $search) {
                    $query->where('nama', 'like', "%{$search}%");
                })
                ->paginate($perPg)
                ->withQueryString(),
            'filters' => $req->only(['search', 'perPage'])
        ]);
    }

    public function edit(Student $santri)
    {
        $daerah = Dormitory::where('gender', $santri->jenis_kelamin)->get();
        $madin = MadinEducation::all();
        $formal = FormalEducation::all();
        $family = $santri->family;
        return inertia('Santri/Edit', compact('santri', 'family', 'madin', 'formal', 'daerah'));
    }
    public function update(Student $santri, UpdateStudentRequest $req)
    {
        $input = $req->except(['family']);
        $santri->update($input);
        return back()->with('message', 'Data Pribadi Berhasil di edit');
    }
    public function updateOrtu(Request $req, int $id)
    {
        $input = $req->except(['created_at', 'updated_at']);
        $family =  Family::where('student_id', $id)->update($input);
        return back()->with('message', 'Data Orang tua Berhasil di edit');
    }
    public function updateFoto(Student $student, Request $req)
    {
        $pesan  = 'Foto Berhasil Diperbarui';
        if ($req->hasFile('santri')) {
            $req->validate([
                'santri' => 'required|image|mimes:jpg,png,jpeg,svg|max:2024',
            ]);
            $extension = $req->file('santri')->extension();
            $nama_file_santri = $student->nis . '-' . time() . '.' . $extension;
            $req->file('santri')->storeAs('foto_santri', $nama_file_santri, 'public');
            $santri_saved = $student->update([
                'foto' => $nama_file_santri
            ]);
        }
        if ($req->hasFile('wali')) {
            $req->validate([
                'wali' => 'required|image|mimes:jpg,png,jpeg,svg|max:2024',
            ]);
            $extension = $req->file('wali')->extension();
            $nama_file_wali = $student->nis . '-' . time() . '.' . $extension;
            $req->file('wali')->storeAs('foto_wali', $nama_file_wali, 'public');
            $wali_saved = $student->update([
                'foto_wali' => $nama_file_wali
            ]);
        }
        return Redirect::route('admin.santri.index')->with('message', $pesan);
    }
}
