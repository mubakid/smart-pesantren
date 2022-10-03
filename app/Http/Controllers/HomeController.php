<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user() !== null) {
            $role = Auth::user()->roles->pluck('name')[0] ?? 'tamu';
            switch ($role) {
                case 'admin':
                    return inertia('Dashboard/admin');
                    break;
                case 'super_admin':
                    return inertia('Dashboard/super_admin');
                    break;
                case 'tamu':
                    return inertia('Dashboard/form_pendaftaran');
                    break;
                case 'santri_baru':
                    return inertia('Dashboard/santri_baru');
                    break;
                case 'santri':
                    return inertia('Dashboard/santri_aktif');
                    break;
                case 'alumni':
                    return inertia('Dashboard/alumni');
                    break;
                case 'admin_madin':
                    return inertia('Dashboard/admin_madin');
                    break;
                case 'hankamtib':
                    return inertia('Dashboard/hankamtib');
                    break;
                case 'bendahara':
                    return inertia('Dashboard/bendahara');
                    break;
                case 'asatidz':
                    return inertia('Dashboard/asatidz');
                    break;
                default:
                    return inertia('Dashboard/form_pendaftaran');
                    break;
            }
        } else {
            return redirect('/');
        }
    }
    public function try(Request $req)
    {
        dd($req->all());
    }
}
