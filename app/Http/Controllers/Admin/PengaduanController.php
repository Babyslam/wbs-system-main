<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::where([
            'status' => 'Pengaduan'
        ])->get();

        return view('pengaduan', ['pengaduans' => $pengaduans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'perihal' => ['required'],
            'nama_terlapor' => ['required'],
            'jabatan_terlapor' => ['required'],
            'perangkat_daerah' => ['required'],
            'tempat_kejadian' => ['required'],
            'tanggal_kejadian' => ['required', 'date'],
            'detail_kejadian' => ['required']
        ]);

        $validated['tanggal_pengaduan'] = today();
        $validated['user_id'] = $request->user()->id;

        Pengaduan::create($validated);

        return redirect('/admin/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view('pengaduan.edit', ['pengaduan' => $pengaduan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $validated = $request->validate([
            'tanggal_pengaduan' => ['required', 'date'],
            'perihal' => ['required'],
            'nama_terlapor' => ['required'],
            'jabatan_terlapor' => ['required'],
            'perangkat_daerah' => ['required'],
            'tempat_kejadian' => ['required'],
            'tanggal_kejadian' => ['required', 'date'],
            'detail_kejadian' => ['required'],
        ]);

        if ($request->status_pengaduan == 'disetujui') {
            $validated = $request->validate([
                'tanggal_pengaduan' => ['required', 'date'],
                'perihal' => ['required'],
                'nama_terlapor' => ['required'],
                'jabatan_terlapor' => ['required'],
                'perangkat_daerah' => ['required'],
                'tempat_kejadian' => ['required'],
                'tanggal_kejadian' => ['required', 'date'],
                'detail_kejadian' => ['required'],
                'nomor_agenda' => ['required'],
                'status_pengaduan' => ['required'],
                'tanggal_agenda' => ['required']
            ]);
            $validated['status'] = 'Tercatat';
        }

        if ($request->status_pengaduan == 'ditolak') {
            $validated = $request->validate([
                'tanggal_pengaduan' => ['required', 'date'],
                'perihal' => ['required'],
                'nama_terlapor' => ['required'],
                'jabatan_terlapor' => ['required'],
                'perangkat_daerah' => ['required'],
                'tempat_kejadian' => ['required'],
                'tanggal_kejadian' => ['required', 'date'],
                'detail_kejadian' => ['required'],
                'status_pengaduan' => ['required'],
                'catatan' => ['required'],
            ]);
            $validated['status'] = 'Di Tolak';
        }

        $pengaduan->update($validated);

        return redirect('/admin/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();

        return redirect('/admin/pengaduan');
    }
}
