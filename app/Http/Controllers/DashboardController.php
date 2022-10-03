<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return inertia('Admin/Dashboard');
    }
    public function tamu()
    {
        return inertia('Student/Dashboard');
    }
}
