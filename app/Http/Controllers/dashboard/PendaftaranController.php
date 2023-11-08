<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        $registrasi = Register::with(['cluster', 'titikSelam', 'waktu'])->paginate(5);
        return view('dashboard.registrasi', compact('registrasi'));
    }
}
