<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelimpahan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PelimpahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::where([
            'status' => 'Pelimpahan'
        ])->get();

        return view('pelimpahan', ['pengaduans' => $pengaduans]);
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
     * @param  \App\Models\Pelimpahan  $pelimpahan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelimpahan $pelimpahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelimpahan  $pelimpahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('pelimpahan.edit', ['pengaduan' => $pengaduan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelimpahan  $pelimpahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $pelimpahan = $pengaduan->pelimpahan;
        if ($pelimpahan == null) {
            $validated = $request->validate([
                'hasil_rapat_eksternal' => ['required', 'file:pdf'],
                'status_pelimpahan' => ['required'],
            ]);

            $validated['pengaduan_id'] = $pengaduan->id;

            $hasil_rapat_eksternal = $request->file('hasil_rapat_eksternal');
            $validated['hasil_rapat_eksternal'] = $hasil_rapat_eksternal->store('hasil-rapat-eksternal');

            Pelimpahan::create($validated);
        } else {
            $validated = $request->validate([
                'hasil_rapat_eksternal' => ['required', 'file:pdf'],
                'status_pelimpahan' => ['required'],
            ]);

            if ($request->hasFile('hasil_rapat_eksternal')) {
                $hasil_rapat_eksternal = $request->file('hasil_rapat_eksternal');
                $validated['hasil_rapat_eksternal'] = $hasil_rapat_eksternal->store('hasil-rapat-eksternal');
            }

            $pelimpahan->update($validated);
        }

        if ($request->status_pelimpahan == 'ditolak') {
            $validated = $request->validate([
                'catatan' => ['required'],
            ]);

            $pengaduan->update([
                'status' => $request->status_pelimpahan === 'disetujui' ? 'Selesai' : ($request->status_pelimpahan === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_pelimpahan' => $request->status_pelimpahan,
                'catatan' => $request->catatan,
            ]);
        } else {
            $pengaduan->update([
                'status' => $request->status_pelimpahan === 'disetujui' ? 'Selesai' : ($request->status_pelimpahan === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_pelimpahan' => $request->status_pelimpahan,
            ]);
        }

        return redirect('admin/pelimpahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelimpahan  $pelimpahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelimpahan $pelimpahan)
    {
        //
    }
}
