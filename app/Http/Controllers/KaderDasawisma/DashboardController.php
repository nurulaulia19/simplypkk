<?php

namespace App\Http\Controllers\KaderDasawisma;

use App\Http\Controllers\Controller;
use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // $user = Auth::user();
        // $keluarga = DataKeluarga::
        // where('id_user', $user->id)
        // ->get()->count();
        // $keluargaUpdate = DataKeluarga::
        // where('id_user', $user->id)->where('dilihat',false)
        // ->get()->count();

        // $warga = DataWarga::
        // where('id_user', $user->id)
        // ->get()->count();

        // $kegiatan = DataKegiatanWarga::
        // where('id_user', $user->id)
        // ->get()->count();

        // $pemanfaatan = DataPemanfaatanPekarangan::
        // where('id_user', $user->id)
        // ->get()->count();

        // $industri = DataIndustriRumah::
        // where('id_user', $user->id)
        // ->get()->count();

        // $rekap = DataWarga::with('keluarga')
        // ->where('id_user', $user->id)
        // ->get()->count();

        // return view('kader.dashboard', compact('keluarga', 'warga', 'kegiatan', 'pemanfaatan', 'industri',  'rekap', 'keluargaUpdate'));
        return view('kader.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
