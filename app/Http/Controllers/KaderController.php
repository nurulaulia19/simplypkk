<?php

namespace App\Http\Controllers;

use App\Models\DataIndustriRumah;
use App\Models\DataKegiatanWarga;
use App\Models\DataKeluarga;
use App\Models\DataPelatihanKader;
use App\Models\DataPemanfaatanPekarangan;
use App\Models\DataWarga;
use App\Models\KategoriKegiatan;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KaderController extends Controller
{
    //
    // halaman dashboard
    public function dashboard_kader(){
        $user = Auth::user();
        $keluarga = DataKeluarga::
        where('id_user', $user->id)
        ->get()->count();
        $keluargaUpdate = DataKeluarga::
        where('id_user', $user->id)->where('dilihat',false)
        ->get()->count();

        $warga = DataWarga::
        where('id_user', $user->id)
        ->get()->count();

        $kegiatan = DataKegiatanWarga::
        where('id_user', $user->id)
        ->get()->count();

        $pemanfaatan = DataPemanfaatanPekarangan::
        where('id_user', $user->id)
        ->get()->count();

        $industri = DataIndustriRumah::
        where('id_user', $user->id)
        ->get()->count();

        $rekap = DataWarga::with('keluarga')
        ->where('id_user', $user->id)
        ->get()->count();

        return view('kader.dashboard', compact('keluarga', 'warga', 'kegiatan', 'pemanfaatan', 'industri',  'rekap', 'keluargaUpdate'));
    }


}
