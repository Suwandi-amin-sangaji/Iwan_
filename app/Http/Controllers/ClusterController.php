<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\TitikSelam;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    public function getClusterData(Request $request)
    {
        $tanggal = $request->input('tanggal');

        // Lakukan logika untuk mengambil data cluster berdasarkan tanggal dari model Cluster atau tabel database yang sesuai
        $clusterData = Register::where('tanggal', $tanggal)->pluck('cluster', 'id');

        return response()->json($clusterData);
    }

    
}
