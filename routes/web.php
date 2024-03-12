<?php

use App\Http\Controllers\KaderDasawisma\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home'); // Corrected HomeController import

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['user_type:kader_dasawisma'])->group(function(){
    Route::get('/dashboard_kader', [KaderController::class, 'dashboard_kader'])->name('kader_dasawisma.dashboard');

    // Route::get('getKeterangan/{id}', function ($id) {
    //     $keterangan = KeteranganKegiatan::where('id_kegiatan',$id)->get();
    //     // dd($keterangan);
    //     return response()->json($keterangan);
    // });


// form data pendataan kader
// Route::resource('/data_warga', DataWargaController::class);
// Route::resource('/data_kegiatan', DataKegiatanWargaController::class);
// Route::resource('/data_keluarga', DataKeluargaController::class);
// Route::resource('/data_pemanfaatan', DataPemanfaatanPekaranganController::class);
// Route::resource('/data_industri', DataIndustriRumahController::class);
// Route::resource('/data_pelatihan', DataPelatihanKaderController::class);
// Route::resource('/data_gabung', DataKaderGabungController::class);
// Route::get('/rekap', [KaderFormController::class, 'rekap']);

// // rekap anggota keluarga
// Route::get('/rekap_data_warga/{id}/rekap_data_warga', [KaderFormController::class, 'rekap_data_warga']);

// //print rekap anggota keluarga
// // Route::get('/print/{id}', [KaderFormController::class, 'print']);
// // Route::get('/print_pdf/{id}', [KaderFormController::class, 'print_pdf']);
// Route::get('/print_pdf/{id}',  [KaderFormController::class, 'printPDF'])->name('print.pdf');


// //print rekap anggota keluarga
// // Route::get('/print_cakel/{id}', [KaderFormController::class, 'print_cakel']);
// Route::get('/print_pdf_cakel/{id}', [KaderFormController::class, 'print_pdf_cakel']);


// // rekap catatan keluarga
// Route::get('/catatan_keluarga/{id}/catatan_keluarga', [KaderFormController::class, 'catatan_keluarga']);

// // profil kader
// Route::get('/profil', [KaderFormController::class, 'profil']);
// Route::post('/profil/update/{id}', [KaderFormController::class, 'update_profil']);
// Route::post('/profil/update/{id}/password', [KaderFormController::class, 'update_password']);


// // Forgot Password
// Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


});
