@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('admin/penelahaan/' . $pengaduan->id) }}"
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
                                    @error('status_tercatat')
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
                                    @if ($errors->has('catatan'))
                                        <textarea class="form-control" placeholder="Catatan" name="catatan" id="catatan" aria-label="catatan"
                                            aria-describedby="catatan" rows="3">{{ old('catatan') ?? $pengaduan->catatan }}</textarea>
                                    @else
                                        <textarea class="form-control" placeholder="Catatan" name="catatan" id="catatan" aria-label="catatan"
                                            aria-describedby="catatan" rows="3" disabled>{{ old('catatan') ?? $pengaduan->catatan }}</textarea>
                                    @endif
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
                                        aria-label="pokok_permasalahan" aria-describedby="pokok_permasalahan" rows="3">{{ old('pokok_permasalahan') ?? ($pengaduan->penelahaan->pokok_permasalahan ?? null) }}</textarea>
                                    @error('pokok_permasalahan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Analisis berdasarkan ketentuan peraturan UU" name="analisis"
                                        id="analisis" aria-label="analisis" aria-describedby="analisis" rows="3">{{ old('analisis') ?? ($pengaduan->penelahaan->analisis ?? null) }}</textarea>
                                    @error('analisis')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <textarea class="form-control" placeholder="Kesimpulan hasil telaah" name="kesimpulan" id="kesimpulan"
                                        aria-label="kesimpulan" aria-describedby="kesimpulan" rows="3">{{ old('kesimpulan') ?? ($pengaduan->penelahaan->kesimpulan ?? null) }}</textarea>
                                    @error('kesimpulan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="laporan" id="laporan"
                                        aria-label="laporan" aria-describedby="laporan"
                                        value="{{ old('laporan') ?? ($pengaduan->penelahaan->laporan ?? null) }}">
                                    @error('laporan')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <select class="form-control" name="status_penelahaan" id="status_penelahaan"
                                        aria-label="status_penelahaan" aria-describedby="status_penelahaan"
                                        value="{{ old('status_penelahaan') ?? $pengaduan->status_penelahaan }}">
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
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
