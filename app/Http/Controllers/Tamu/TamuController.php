<?php

namespace App\Http\Controllers\Tamu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function regLembaga()
    {
        return inertia('Tamu/RegLembaga');
    }
}
