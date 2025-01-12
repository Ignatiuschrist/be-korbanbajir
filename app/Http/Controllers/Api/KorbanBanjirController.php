<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KorbanBanjir;
use Illuminate\Http\Request;

class KorbanBanjirController extends Controller
{
    /**
     * Tampilkan semua data korbanBanjir.
     */
    public function index()
    {
        $korbanBanjir = KorbanBanjir::with('daerah')->get();

        return response()->json([
            'code' => 200,
            'message' => 'Daftar korbanBanjir berhasil diambil',
            'data' => $korbanBanjir
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'daerah_id' => 'required|exists:daerah,id',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'umur' => 'required|integer|min:0',
        ]);

        $korbanBanjir = KorbanBanjir::create($validated);

        return response()->json([
            'code' => 201,
            'message' => 'KorbanBanjir created successfully',
            'data' => $korbanBanjir,
        ], 201);
    }

    public function update(Request $request, KorbanBanjir $korbanBanjir)
    {
        $validated = $request->validate([
            'daerah_id' => 'exists:daerah,id',
            'nama' => 'string',
            'alamat' => 'string',
            'umur' => 'integer|min:0',
        ]);

        $korbanBanjir->update($validated);

        return response()->json([
            'code' => 200,
            'message' => 'KorbanBanjir updated successfully',
            'data' => $korbanBanjir,
        ]);
    }

    public function destroy(KorbanBanjir $korbanBanjir)
    {
        $korbanBanjir->delete();

        return response()->json([
            'code' => 200,
            'message' => 'KorbanBanjir deleted successfully',
        ]);
    }
}
