@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('admin/pengaduan') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Perihal" name="perihal"
                                        id="perihal" aria-label="Perihal" aria-describedby="perihal"
                                        value="{{ old('perihal') }}">
                                    @error('perihal')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Terlapor"
                                        name="nama_terlapor" id="nama_terlapor" aria-label="nama_terlapor"
                                        aria-describedby="nama_terlapor" value="{{ old('nama_terlapor') }}">
                                    @error('nama_terlapor')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Jabatan Terlapor"
                                        name="jabatan_terlapor" id="jabatan_terlapor" aria-label="jabatan_terlapor"
                                        aria-describedby="jabatan_terlapor" value="{{ old('jabatan_terlapor') }}">
                                    @error('jabatan_terlapor')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <input type="text" class="form-control" placeholder="Perangkat Daerah"
                                        name="perangkat_daerah" id="perangkat_daerah" aria-label="perangkat_daerah"
                                        aria-describedby="perangkat_daerah" value="{{ old('perangkat_daerah') }}">
                                    @error('perangkat_daerah')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Tempat Kejadian"
                                        name="tempat_kejadian" id="tempat_kejadian" aria-label="tempat_kejadian"
                                        aria-describedby="tempat_kejadian" value="{{ old('tempat_kejadian') }}">
                                    @error('tempat_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="tanggal_kejadian" id="tanggal_kejadian"
                                        aria-label="tanggal_kejadian" aria-describedby="tanggal_kejadian"
                                        value="{{ old('tanggal_kejadian') }}">
                                    @error('tanggal_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <textarea class="form-control" placeholder="Detail Kejadian" name="detail_kejadian" id="detail_kejadian"
                                        aria-label="detail_kejadian" aria-describedby="detail_kejadian" value="{{ old('detail_kejadian') }}"
                                        rows="3"></textarea>
                                    @error('detail_kejadian')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
