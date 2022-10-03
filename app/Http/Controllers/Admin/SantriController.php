<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SantriController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return inertia('Santri/Index', compact('students'));
    }
    public function edit(Student $santri)
    {
        $santri['update_url'] = route('admin.santri.update', $santri->id);
        return inertia('Santri/Edit', compact('santri'));
    }
    public function update(Request $request, int $id)
    {
        $input = $request->except(['updated_at', 'created_at', 'update_url']);
        Student::where('id', $id)->update($input);
        return Redirect::route('admin.santri.index')->with('message', 'Berhasil di edit');
    }
}
