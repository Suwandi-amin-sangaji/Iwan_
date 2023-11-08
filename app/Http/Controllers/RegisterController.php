<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendaftaranRequest;
use App\Models\Cluster;
use App\Models\Register;
use App\Models\TitikSelam;
use App\Models\Waktu;
use App\Notifications\RegistrasiNotification;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $waktu = Waktu::all();

        $clusters = Cluster::all();
        $selectedCluster = $request->input('cluster_id');
        $titikSelam = [];

        if ($selectedCluster) {
            $titikSelam = TitikSelam::where('cluster_id', $selectedCluster)->get();
        }

        return view('pendaftaran.index', compact('clusters', 'waktu', 'titikSelam', 'selectedCluster'));
    }



    public function store(PendaftaranRequest $request)
    {

        $validated = $request->validated();
        $waktu = $validated['waktu_id'];
        $tanggal = $validated['tanggal'];
        $cluster = $validated['cluster_id'];

        // Periksa apakah waktu yang sama sudah digunakan oleh kapal lain pada tanggal yang sama
        $waktuTerpakai = Register::where('waktu_id', $waktu)
            ->where('tanggal', $tanggal)
            ->first();

        if ($waktuTerpakai) {
            flash()->addWarning('Waktu ' . $waktuTerpakai->jam . ' sudah digunakan oleh kapal lain pada tanggal yang sama. Silakan pilih waktu lain.');
            return redirect()->back();
        }

        // Periksa apakah aturan batasan jumlah kapal berlaku pada tanggal ini
        $batasanTanggal = Register::where('cluster_id', $cluster)
            ->where('tanggal', $tanggal)
            ->first();

        if ($batasanTanggal) {
            // Hitung jumlah kapal dalam cluster untuk tanggal yang sama
            $kapalDalamCluster = Register::where('cluster_id', $cluster)
                ->where('tanggal', $tanggal)
                ->count();

            // Periksa apakah jumlah kapal dalam cluster telah mencapai batasan (2)
            if ($kapalDalamCluster >= 2) {
                flash()->addWarning('Cluster ' . $cluster . ' di ' . $tanggal . ' sudah mencapai batasan kapal yang diizinkan (2 kapal) per hari.');
                return redirect()->back();
            }
        }

        // Jika kapal belum terdaftar, buat entri baru
        Register::create($validated);
        $user = $request->user(); // Gantilah ini dengan cara Anda mendapatkan pengguna yang mendaftar
        $user->notify(new RegistrasiNotification());
        flash()->addSuccess('Berhasil Menyimpan Data');
        return redirect()->route('pendaftaran.index');
    }


}
