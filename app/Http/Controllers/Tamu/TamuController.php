<?php

namespace App\Http\Controllers\Tamu;

use App\Models\Dormitory;
use Illuminate\Http\Request;
use App\Models\MadinEducation;
use App\Models\FormalEducation;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TamuController extends Controller
{
    public function regLembaga()
    {
        $formal = FormalEducation::all();
        $madin = MadinEducation::all();
        $jk = Auth::user()->student->jenis_kelamin;
        $dormitories = Dormitory::where('gender', $jk)->get();
        return inertia('Tamu/RegLembaga', compact('formal', 'madin', 'dormitories'));
    }
    public function uploadFoto()
    {
        return inertia('Tamu/UploadFoto');
    }
    public function storeFoto(Request $req)
    {
        dd($req->all());
    }
    // public function storeFoto(StoreImage $request)
    // {

    //     $image_path = '';

    //     if ($request->hasFile('image')) {
    //         $image_path = $request->file('image')->store('image', 'public');
    //     }

    //     $data = Image::create([
    //         'image' => $image_path,
    //     ]);


    //     return Redirect::route('image.index');
    // }
    public function storeLembaga(Request $req)
    {
        $u = Auth::user();
        if ($u) {
            Student::where('user_id', $u->id)->update(
                [
                    'dormitory_id' => $req->daerah,
                    'room' => $req->asrama,
                    'madin_education_id' => $req->madin,
                    'formal_education_id' => $req->formal,
                ]
            );
        }
        return Redirect::route('home');
    }
}
