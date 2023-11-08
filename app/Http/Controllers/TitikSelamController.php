<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\TitikSelam;
use Illuminate\Http\Request;

class TitikSelamController extends Controller
{
    public function selectCluster($clusterId)
    {
        // Periksa apakah cluster dengan ID yang diberikan ada
        $cluster = Cluster::find($clusterId);

        if (!$cluster) {
            return response()->json(['error' => 'Cluster not found'], 404);
        }

        // Ambil data titik selam yang sesuai berdasarkan cluster yang dipilih.
        $titikSelam = TitikSelam::where('cluster_id', $clusterId)->get();

        // Kemudian Anda dapat mengembalikan data titik selam sebagai respons JSON.
        return response()->json($titikSelam);
    }
}
