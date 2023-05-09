<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AntrianController extends Controller
{
    public function getNomorAntrian(Request $request)
    {
        // Ambil nomor antrian terbaru
        $no_terbaru = Antrian::max('no_antrian');

        // Tambahkan nomor antrian baru
        $antrian = new Antrian;
        $antrian->no_antrian = $no_terbaru + 1;
        $antrian->save();

        if ($request->wantsJson()) {
            return response()->json(['no_antrian' => $antrian->no_antrian]);
        }

        return View::make('antrian')->with('no_antrian', $antrian->no_antrian);
    }
}
