@extends('user.layouts.app-dashboard')

@section('content')
    <div class="bg-blue-light">
        <main class="py-4">
            <div class="container">
                <h1>
                    <span class="fs-3 fw-semibold">Tulis</span><span class="text-danger fw-bold"> PENGADUAN</span>
                </h1>
                <p class="mb-4">
                    Apabila Anda mendapati adanya pelanggaran di lingkungan
                    Pemerintah Kota Malang, laporkan pada Inspektorat Kota
                    Malang. Laporan Anda akan ditindaklanjuti apabila sesuai
                    dengan syarat/kriteria Laporan. Anda tidak perlu
                    khawatir terungkapnya identitas diri anda karena
                    Inspektorat Kota Malang akan
                    <span class="text-danger">MERAHASIAKAN & MELINDUNGI</span>
                    Identitas Anda sebagai whistleblower. Kami sangat
                    menghargai informasi yang Anda laporkan. Fokus kami
                    kepada materi informasi yang Anda Laporkan. Sebagai
                    bentuk terimakasih kami terhadap laporan yang Anda
                    kirim, kami berkomitmen untuk merespon laporan Anda
                    selambat-lambatnya 15 (Lima Belas) hari kerja sejak
                    laporan Anda dikirim.
                </p>
            </div>
            <div class="p-5">
                <div class="container rounded-4 p-4 bg-white">
                    <form action="{{ url('/dashboard/pengaduan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 d-flex gap-3 flex-wrap">
                            <div class="d-flex justify-content-center align-items-start">
                                <h3 class="display-5 fw-semibold m-0">1</h3>
                            </div>
                            <div class="col-10">
                                <h3 class="card-title">
                                    Detail
                                    <span class="text-danger">Pengaduan</span>
                                </h3>
                                <p class="card-text">
                                    Lengkapi seluruh form berikut. Sampaikan
                                    laporan Anda secara detail dan jelas.
                                </p>
                                <div class="mb-3 row">
                                    <label for="perihal"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Perihal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" id="perihal"
                                            placeholder="Perihal" name="perihal" value="{{ old('perihal') }}" />
                                        @error('perihal')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_terlapor"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Nama
                                        dilaporkan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" id="nama_terlapor"
                                            placeholder="Nama Pihak yang terlapor" name="nama_terlapor"
                                            value="{{ old('nama_terlapor') }}" />
                                        @error('nama_terlapor')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" id="jabatan"
                                            placeholder="Jabatan Pihak yang terlapor" name="jabatan_terlapor"
                                            value="{{ old('jabatan_terlapor') }}" />
                                        @error('jabatan_terlapor')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="perangkat_daerah"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Perangkat
                                        Daerah</label>
                                    <div class="col-sm-9">
                                        <select name="perangkat_daerah" multiple="multiple" id="perangkat_daerah"
                                            class="form-control form-select bg-gray-1 py-3">
                                            <option value="Sekretariat DPRD">
                                                Sekretariat DPRD
                                            </option>
                                            <option value="Inspektorat">
                                                Inspektorat
                                            </option>
                                            <option value="Badan Pengelolaan Keuangan dan Pajak Daerah">
                                                Badan Pengelolaan Keuangan dan
                                                Pajak Daerah
                                            </option>
                                        </select>
                                        @error('perangkat_daerah')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tempat"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Tempat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" id="tempat"
                                            placeholder="Tempat kejadian" name="tempat_kejadian"
                                            value="{{ old('tempat_kejadian') }}" />
                                        @error('tempat_kejadian')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Tanggal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" id="tanggal"
                                            placeholder="Tanggal kejadian" name="tanggal_kejadian"
                                            value="{{ old('tanggal_kejadian') }}" />
                                        @error('tanggal_kejadian')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="detail_kejadian" class="col-sm-3 col-form-label fs-sm">Kejadian</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control bg-gray-1 py-3" id="detail_kejadian" placeholder="Detail kejadian yang dilaporkan"
                                            rows="5" name="detail_kejadian">{{ old('detail_kejadian') }}</textarea>
                                        @error('detail_kejadian')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanda_pengenal"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Bukti
                                        Pendukung</label>
                                    <div class="col-sm-9">
                                        <div class="position-relative">
                                            <div class="input-group d-flex align-items-center gap-3" style="z-index: 999">
                                                <div class="input-group-append">
                                                    {{-- <label
                                                        class="browse rounded-4 py-3 px-5 btn btn-outline-light border border-1 border-dark text-danger">
                                                        Pilih File
                                                        <input type="file"
                                                            class="custom-file-input file position-absolute d-none"
                                                            name="bukti[]" id="upload_file" />
                                                    </label> --}}
                                                    <input type="file" class="custom-file-input file position-absolute"
                                                        accept=".doc,.docx,.PDF,.pdf,.jpg,.jpeg,.png" name="bukti[]"
                                                        id="bukti" multiple />
                                                </div>
                                                {{-- <div class="d-flex gap-3">
                                                    <button id="tambah-bukti" type="button"
                                                        class="btn btn-success text-black py-2 d-flex align-items-center">
                                                        + Tambah
                                                    </button>
                                                    <button id="hapus-bukti" type="button"
                                                        class="btn btn-danger text-black py-2 d-flex align-items-center">
                                                        <img src="{{ asset('wbs-assets/img/icons/trash.svg') }}"
                                                            alt="Trash" class="icon" />
                                                        Hapus
                                                    </button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row d-none">
                                    <label for="kode_keamanan" class="col-sm-3 col-form-label fs-sm">Kode Keamanan</label>
                                    <div class="col-sm-9">
                                        <div class="captcha mb-3">
                                            <img src="{{ asset('wbs-assets/img/captcha.png') }}" alt=""
                                                class="mw-100 d-block" width="240" />
                                        </div>
                                        <label for="kode_kemamanan" class="form-label">Masukkan kode keamanan
                                            diatas:</label>
                                        <input type="text" class="form-control bg-gray-1 py-3" id="kode_kemamanan"
                                            placeholder="Masukkan kode keamanan (6 Karakter)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <button type="submit"
                                    class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
                                    data-bs-toggle="modal" data-bs-target="#modalSubmitPengaduan">KIRIM PENGADUAN
                                    <img src="{{ asset('wbs-assets/img/icons/plane.svg') }}" alt="Send"
                                        class="icon d-inline-block" />
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <div class="modal fade" id="modalSubmitPengaduan" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
            <div class="modal-content bg-white"
                style="background: url({{ asset('wbs-assets/img/shapes/bg-gradient.svg') }})">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close shadow-none bg-img-none p-0 pe-4" data-bs-dismiss="modal"
                        aria-label="Close">
                        <img class="mw-100" src="{{ asset('wbs-assets/img/icons/close.svg') }}" alt=""
                            title="" />
                    </button>
                </div>
                <div class="modal-body py-4 px-5">
                    <div class="d-flex justify-content-center flex-column">
                        <img src="{{ asset('wbs-assets/img/logo-diskominfo.svg') }}" alt=""
                            class="d-block mx-auto mw-100 mb-4" />
                        <p class="text-primary text-center">
                            Pengaduan anda sedang diajukan, silahkan pantau
                            perkembangan pengaduan anda di bagian pantau
                            pengaduan
                        </p>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-primary py-2 px-5 d-inline-block" href="ajukanpengaduan"
                            role="button">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
