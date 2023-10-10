<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditInvestigasi;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AuditInvestigasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::where([
            'status' => 'Audit Investigasi'
        ])->get();

        return view('audit-investigasi', ['pengaduans' => $pengaduans]);
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
     * @param  \App\Models\AuditInvestigasi  $auditInvestigasi
     * @return \Illuminate\Http\Response
     */
    public function show(AuditInvestigasi $auditInvestigasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuditInvestigasi  $auditInvestigasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('audi-investigasi.edit', ['pengaduan' => $pengaduan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuditInvestigasi  $auditInvestigasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $audit = $pengaduan->audit;
        if ($audit == null) {
            $validated = $request->validate([
                'surat_tugas' => ['required', 'file:pdf'],
                'ringkasan_hasil_audit' => ['required'],
                'laporan_hasil_audit' => ['required', 'file:pdf'],
                'rekomendasi' => ['required'],
                'status_audit_investigasi' => ['required'],
            ]);

            $validated['pengaduan_id'] = $pengaduan->id;

            $surat_tugas = $request->file('surat_tugas');
            $validated['surat_tugas'] = $surat_tugas->store('surat-tugas');

            $laporan_hasil_audit = $request->file('laporan_hasil_audit');
            $validated['laporan_hasil_audit'] = $laporan_hasil_audit->store('laporan-hasil-audit');

            AuditInvestigasi::create($validated);
        } else {
            $validated = $request->validate([
                'surat_tugas' => ['nullable', 'file:pdf'],
                'ringkasan_hasil_audit' => ['required'],
                'laporan_hasil_audit' => ['nullable', 'file:pdf'],
                'rekomendasi' => ['required'],
                'status_audit_investigasi' => ['required'],
            ]);

            if ($request->hasFile('surat_tugas')) {
                $surat_tugas = $request->file('surat_tugas');
                $validated['surat_tugas'] = $surat_tugas->store('surat-tugas');
            }

            if ($request->hasFile('laporan_hasil_audit')) {
                $laporan_hasil_audit = $request->file('laporan_hasil_audit');
                $validated['laporan_hasil_audit'] = $laporan_hasil_audit->store('laporan-hasil-audit');
            }

            $audit->update($validated);
        }

        if ($request->status_audit_investigasi == 'ditolak') {
            $validated = $request->validate([
                'catatan' => ['required'],
            ]);

            $pengaduan->update([
                'status' => $request->status_audit_investigasi === 'disetujui' ? 'Pelimpahan' : ($request->status_audit_investigasi === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_audit_investigasi' => $request->status_audit_investigasi,
                'catatan' => $request->catatan,
            ]);
        } else {
            $pengaduan->update([
                'status' => $request->status_audit_investigasi === 'disetujui' ? 'Pelimpahan' : ($request->status_audit_investigasi === 'ditolak' ? 'Di Tolak' : $pengaduan->status),
                'status_audit_investigasi' => $request->status_audit_investigasi,
            ]);
        }

        return redirect('/admin/audit-investigasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuditInvestigasi  $auditInvestigasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditInvestigasi $auditInvestigasi)
    {
        //
    }
}
