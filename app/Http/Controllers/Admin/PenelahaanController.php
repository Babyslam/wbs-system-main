<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelahaan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PenelahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::where([
            'status' => 'Penelahaan'
        ])->get();

        return view('penelahaan', ['pengaduans' => $pengaduans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penelahaan  $penelahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penelahaan $penelahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penelahaan  $penelahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('penelahaan.edit', ['pengaduan' => $pengaduan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penelahaan  $penelahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $penelahaan = $pengaduan->penelahaan;
        if ($penelahaan == null) {
            $validated = $request->validate([
                'pokok_permasalahan' => ['required'],
                'analisis' => ['required'],
                'kesimpulan' => ['required'],
                'laporan' => ['required', 'file:pdf'],
                'status_penelahaan' => ['required'],
            ]);

            $validated['pengaduan_id'] = $pengaduan->id;

            $laporan = $request->file('laporan');
            $validated['laporan'] = $laporan->store('laporan-penelahaan');

            Penelahaan::create($validated);
        } else {
            $validated = $request->validate([
                'pokok_permasalahan' => ['required'],
                'analisis' => ['required'],
                'kesimpulan' => ['required'],
                'laporan' => ['nullable', 'file:pdf'],
                'status_penelahaan' => ['required'],
            ]);

            if ($request->hasFile('laporan')) {
                $laporan = $request->file('laporan');
                $validated['laporan'] = $laporan->store('laporan-penelahaan');
            }

            $penelahaan->update($validated);
        }

        if ($request->status_penelahaan == 'ditolak') {
            $validated = $request->validate([
                'catatan' => ['required'],
            ]);

            $pengaduan->update([
                'status' => $request->status_penelahaan === 'disetujui' ? 'Audit Investigasi' : ($request->status_penelahaan === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_penelahaan' => $request->status_penelahaan,
                'catatan' => $request->catatan,
            ]);
        } else {
            $pengaduan->update([
                'status' => $request->status_penelahaan === 'disetujui' ? 'Audit Investigasi' : ($request->status_penelahaan === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_penelahaan' => $request->status_penelahaan,
            ]);
        }

        return redirect('/admin/penelahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penelahaan  $penelahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penelahaan $penelahaan)
    {
        //
    }
}
