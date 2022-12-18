<?php

namespace App\Http\Controllers;

use App\Models\Ukf;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::count();
        $ukfs = Ukf::count();

        return view('dashboard', compact('mahasiswas','ukfs'));
    }
}
