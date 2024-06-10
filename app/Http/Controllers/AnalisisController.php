<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Models\Analisis;

class AnalisisController extends Controller
{
    public function index()
    {
        $results = Analisis::all(); // Ambil data dari model Analisis
    
        return view('analisis.index', compact('results'));
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'informasi_kontak_pelanggan' => 'required|string|max:255',
            'interaksi_dengan_pelanggan' => 'required|string|max:255',
            'skor_kepuasan_pelanggan' => 'required|numeric',
            'skor_customer_effort' => 'required|numeric',
            'analisis_trend' => 'required|string|max:255',
        ]);

        Analisis::create($validated);

        return redirect()->route('analisis.index')->with('success', 'Data analisis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $analisis = Analisis::findOrFail($id);
        return view('analisis.edit', compact('analisis'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'informasi_kontak_pelanggan' => 'required|string|max:255',
            'interaksi_dengan_pelanggan' => 'required|string|max:255',
            'skor_kepuasan_pelanggan' => 'required|numeric',
            'skor_customer_effort' => 'required|numeric',
            'analisis_trend' => 'required|string|max:255',
        ]);

        $analisis = Analisis::findOrFail($id);
        $analisis->update($validated);

        return redirect()->route('analisis.index')->with('success', 'Data analisis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $analisis = Analisis::findOrFail($id);
        $analisis->delete();

        return redirect()->route('analisis.index')->with('success', 'Data analisis berhasil dihapus.');
    }

    public function print()
    {
        // Query data from the database
        $analisisData = Analisis::all();
    
        // Create Dompdf instance
        $dompdf = new Dompdf();
    
        // Generate HTML for the PDF
        $html = view('analisis.print', compact('analisisData'))->render();
    
        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
    
        // Render PDF
        $dompdf->render();
    
        // Output PDF to the browser
        return $dompdf->stream("daftar_analisis.pdf");
    }
}
