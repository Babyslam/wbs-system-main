@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('admin/pelimpahan/' . $pengaduan->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="tanggal_pengaduan"
                                        id="tanggal_pengaduan" aria-label="tanggal_pengaduan"
                                        aria-describedby="tanggal_pengaduan"
                                        value="{{ old('tanggal_pengaduan') ?? $pengaduan->tanggal_pengaduan }}" disabled>
                                    @error('tanggal_pengaduan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Perihal" name="perihal"
                                        id="perihal" aria-label="Perihal" aria-describedby="perihal"
                                        value="{{ old('perihal') ?? $pengaduan->perihal }}" disabled>
                                    @error('perihal')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Terlapor"
                                        name="nama_terlapor" id="nama_terlapor" aria-label="nama_terlapor"
                                        aria-describedby="nama_terlapor"
                                        value="{{ old('nama_terlapor') ?? $pengaduan->nama_terlapor }}" disabled>
                                    @error('nama_terlapor')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Jabatan Terlapor"
                                        name="jabatan_terlapor" id="jabatan_terlapor" aria-label="jabatan_terlapor"
                                        aria-describedby="jabatan_terlapor"
                                        value="{{ old('jabatan_terlapor') ?? $pengaduan->jabatan_terlapor }}" disabled>
                                    @error('jabatan_terlapor')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Perangkat Daerah"
                                        name="perangkat_daerah" id="perangkat_daerah" aria-label="perangkat_daerah"
                                        aria-describedby="perangkat_daerah"
                                        value="{{ old('perangkat_daerah') ?? $pengaduan->perangkat_daerah }}" disabled>
                                    @error('perangkat_daerah')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Tempat Kejadian"
                                        name="tempat_kejadian" id="tempat_kejadian" aria-label="tempat_kejadian"
                                        aria-describedby="tempat_kejadian"
                                        value="{{ old('tempat_kejadian') ?? $pengaduan->tempat_kejadian }}" disabled>
                                    @error('tempat_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="tanggal_kejadian" id="tanggal_kejadian"
                                        aria-label="tanggal_kejadian" aria-describedby="tanggal_kejadian"
                                        value="{{ old('tanggal_kejadian') ?? $pengaduan->tanggal_kejadian }}" disabled>
                                    @error('tanggal_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <textarea class="form-control" placeholder="Detail Kejadian" name="detail_kejadian" id="detail_kejadian"
                                        aria-label="detail_kejadian" aria-describedby="detail_kejadian" rows="3" disabled>{{ old('detail_kejadian') ?? $pengaduan->detail_kejadian }}</textarea>
                                    @error('detail_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <select class="form-control" name="status_tercatat" id="status_tercatat"
                                        aria-label="status_tercatat" aria-describedby="status_tercatat"
                                        value="{{ old('status_tercatat') ?? $pengaduan->status_tercatat }}" disabled>
                                        <option value="" selected disabled>Status</option>
                                        <option value="disetujui"
                                            {{ 'disetujui' == (old('status_tercatat') ?? $pengaduan->status_tercatat) ? 'selected' : '' }}>
                                            Setujui</option>
                                        <option value="ditolak"
                                            {{ 'ditolak' == (old('status_tercatat') ?? $pengaduan->status_tercatat) ? 'selected' : '' }}>
                                            Tolak</option>
                                    </select>
                                    @error('status_pengaduan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nomor Agenda"
                                        name="nomor_agenda" id="nomor_agenda" aria-label="nomor_agenda"
                                        aria-describedby="nomor_agenda"
                                        value="{{ old('nomor_agenda') ?? $pengaduan->nomor_agenda }}" disabled>
                                    @error('nomor_agenda')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="tanggal_agenda" id="tanggal_agenda"
                                        aria-label="tanggal_agenda" aria-describedby="tanggal_agenda"
                                        value="{{ old('tanggal_agenda') ?? $pengaduan->tanggal_agenda }}" disabled>
                                    @error('tanggal_agenda')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <textarea class="form-control" placeholder="Catatan" name="catatan" id="catatan" aria-label="catatan"
                                        aria-describedby="catatan" rows="3" disabled>{{ old('catatan') ?? $pengaduan->catatan }}</textarea>
                                    @error('catatan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Pokok Permasalahan" name="pokok_permasalahan" id="pokok_permasalahan"
                                        aria-label="pokok_permasalahan" aria-describedby="pokok_permasalahan" rows="3" disabled>{{ old('pokok_permasalahan') ?? ($pengaduan->penelahaan->pokok_permasalahan ?? null) }}</textarea>
                                    @error('pokok_permasalahan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Analisis berdasarkan ketentuan peraturan UU" name="analisis"
                                        id="analisis" aria-label="analisis" aria-describedby="analisis" rows="3" disabled>{{ old('analisis') ?? ($pengaduan->penelahaan->analisis ?? null) }}</textarea>
                                    @error('analisis')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <textarea class="form-control" placeholder="Kesimpulan hasil telaah" name="kesimpulan" id="kesimpulan"
                                        aria-label="kesimpulan" aria-describedby="kesimpulan" rows="3" disabled>{{ old('kesimpulan') ?? ($pengaduan->penelahaan->kesimpulan ?? null) }}</textarea>
                                    @error('kesimpulan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="laporan" id="laporan"
                                        aria-label="laporan" aria-describedby="laporan"
                                        value="{{ old('laporan') ?? ($pengaduan->penelahaan->laporan ?? null) }}"
                                        disabled>
                                    @error('laporan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <select class="form-control" name="status_penelahaan" id="status_penelahaan"
                                        aria-label="status_penelahaan" aria-describedby="status_penelahaan"
                                        value="{{ old('status_penelahaan') ?? $pengaduan->status_penelahaan }}" disabled>
                                        <option value="" selected disabled>Status</option>
                                        <option value="disetujui"
                                            {{ 'disetujui' == (old('status_penelahaan') ?? $pengaduan->status_penelahaan) ? 'selected' : '' }}>
                                            Setujui</option>
                                        <option value="ditolak"
                                            {{ 'ditolak' == (old('status_penelahaan') ?? $pengaduan->status_penelahaan) ? 'selected' : '' }}>
                                            Tolak</option>
                                    </select>
                                    @error('status_penelahaan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Ringkasan Hasil Audit" name="ringkasan_hasil_audit"
                                        id="ringkasan_hasil_audit" aria-label="ringkasan_hasil_audit" aria-describedby="ringkasan_hasil_audit"
                                        rows="4" disabled>{{ old('ringkasan_hasil_audit') ?? ($pengaduan->audit->ringkasan_hasil_audit ?? null) }}</textarea>
                                    @error('ringkasan_hasil_audit')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Rekomendasi" name="rekomendasi" id="rekomendasi"
                                        aria-label="rekomendasi" aria-describedby="rekomendasi" rows="6" disabled>{{ old('rekomendasi') ?? ($pengaduan->audit->rekomendasi ?? null) }}</textarea>
                                    @error('rekomendasi')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Upload Surat Tugas Tim Audit</label>
                                    <input type="file" class="form-control" name="surat_tugas" id="surat_tugas"
                                        aria-label="surat_tugas" aria-describedby="surat_tugas"
                                        value="{{ old('surat_tugas') ?? ($pengaduan->audit->surat_tugas ?? null) }}"
                                        disabled>
                                    @error('surat_tugas')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Upload Laporan Hasil Audit</label>
                                    <input type="file" class="form-control" name="laporan_hasil_audit"
                                        id="laporan_hasil_audit" aria-label="laporan_hasil_audit"
                                        aria-describedby="laporan_hasil_audit"
                                        value="{{ old('laporan_hasil_audit') ?? ($pengaduan->audit->laporan_hasil_audit ?? null) }}"
                                        disabled>
                                    @error('laporan_hasil_audit')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <select class="form-control" name="status_audit_investigasi"
                                        id="status_audit_investigasi" aria-label="status_audit_investigasi"
                                        aria-describedby="status_audit_investigasi"
                                        value="{{ old('status_audit_investigasi') ?? $pengaduan->status_audit_investigasi }}"
                                        disabled>
                                        <option value="" selected disabled>Status</option>
                                        <option value="disetujui"
                                            {{ 'disetujui' == (old('status_audit_investigasi') ?? $pengaduan->status_audit_investigasi) ? 'selected' : '' }}>
                                            Setujui</option>
                                        <option value="ditolak"
                                            {{ 'ditolak' == (old('status_audit_investigasi') ?? $pengaduan->status_audit_investigasi) ? 'selected' : '' }}>
                                            Tolak</option>
                                    </select>
                                    @error('status_audit_investigasi')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <label>Upload Hasil Rapat Eksternal</label>
                                    <input type="file" class="form-control" name="hasil_rapat_eksternal"
                                        id="hasil_rapat_eksternal" aria-label="hasil_rapat_eksternal"
                                        aria-describedby="hasil_rapat_eksternal"
                                        value="{{ old('hasil_rapat_eksternal') ?? ($pengaduan->pelimpahan->hasil_rapat_eksternal ?? null) }}">
                                    @error('hasil_rapat_eksternal')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <select class="form-control" name="status_pelimpahan" id="status_pelimpahan"
                                        aria-label="status_pelimpahan" aria-describedby="status_pelimpahan"
                                        value="{{ old('status_pelimpahan') ?? $pengaduan->status_pelimpahan }}">
                                        <option value="" selected disabled>Status</option>
                                        <option value="disetujui"
                                            {{ 'disetujui' == (old('status_pelimpahan') ?? $pengaduan->status_pelimpahan) ? 'selected' : '' }}>
                                            Setujui</option>
                                        <option value="ditolak"
                                            {{ 'ditolak' == (old('status_pelimpahan') ?? $pengaduan->status_pelimpahan) ? 'selected' : '' }}>
                                            Tolak</option>
                                    </select>
                                    @error('status_pelimpahan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
