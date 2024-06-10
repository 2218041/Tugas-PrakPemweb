<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $contactInfo = $request->input('contactInfo');
        $customerInteraction = $request->input('customerInteraction');
        $satisfactionScore = $request->input('satisfactionScore');
        $effortScore = $request->input('effortScore');
        $trendAnalysis = $request->input('trendAnalysis');

        // Masukkan data ke dalam database menggunakan query builder Laravel
        DB::table('analisis')->insert([
            'informasi_kontak_pelanggan' => $contactInfo,
            'interaksi_dengan_pelanggan' => $customerInteraction,
            'skor_kepuasan_pelanggan' => $satisfactionScore,
            'skor_customer_effort' => $effortScore,
            'analisis_trend' => $trendAnalysis
        ]);

        // Redirect kembali ke halaman utama atau halaman lain
        return redirect('/')->with('success', 'Data berhasil disimpan');
    }
}
