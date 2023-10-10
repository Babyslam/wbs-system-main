@extends('user.layouts.app')

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
                <form action="/pengaduan/masyarakat" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container rounded-4 p-4 bg-white">
                        <div class="mb-3 d-flex gap-3 flex-wrap">
                            <div class="d-flex justify-content-center align-items-start">
                                <h3 class="display-5 fw-semibold m-0">1</h3>
                            </div>
                            <div class="col-10">
                                <h3 class="card-title">
                                    Buat <span class="text-danger">Akun</span>
                                </h3>
                                <p class="card-text">
                                    Buat akun untuk memantau pengaduan Anda.
                                    Jika Anda sudah pernah membuat akun,
                                    silahkan
                                    <span><a href="{{ url('/login') }}" class="text-black fw-semibold">Login
                                            Disini</a></span>
                                    sebelum membuat pengaduan baru.
                                </p>
                                <div class="mb-3 row">
                                    <label for="username"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" name="username"
                                            id="username" placeholder="Username" value="{{ old('username') }}" />
                                        @error('username')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control bg-gray-1 py-3" name="password"
                                            id="password" placeholder="Password" />
                                        @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="password_confirmation"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Konfirmasi
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control bg-gray-1 py-3"
                                            name="password_confirmation" id="password_confirmation"
                                            placeholder="Ketik Ulang Password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex gap-3 flex-wrap">
                            <div class="d-flex justify-content-center align-items-start">
                                <h3 class="display-5 fw-semibold m-0">2</h3>
                            </div>
                            <div class="col-10">
                                <h3 class="card-title">
                                    Lengkapi
                                    <span class="text-danger">Identitas Anda</span>
                                </h3>
                                <p class="card-text">
                                    Lengkapi identitas diri Anda untuk
                                    mempermudah Tim Whistleblowing System
                                    melakukan verifikasi data atas pengaduan
                                    Anda. Pengaduan dengan identitas pelapor
                                    yang tidak jelas tidak dapat
                                    ditindaklanjuti.
                                </p>
                                <div class="mb-3 row">
                                    <label for="nama_lengkap"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" name="nama"
                                            id="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama') }}" />
                                        @error('nama')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nik"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" name="nomor_identitas"
                                            id="nik" placeholder="NIK (Nomor Induk Kependudukan)"
                                            value="{{ old('nomor_identitas') }}" />
                                        @error('nomor_identitas')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control bg-gray-1 py-3" name="email"
                                            id="email" placeholder="Alamat E-Mail" value="{{ old('email') }}" />
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_telp"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">No.
                                        Telp</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" name="nomor_telepon"
                                            id="no_telp" placeholder="No. Telp" value="{{ old('nomor_telepon') }}" />
                                        @error('nomor_telepon')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat_rumah" class="col-sm-3 col-form-label fs-sm">Alamat Rumah</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control bg-gray-1 py-3" name="alamat" id="alamat_rumah" placeholder="Alamat Rumah"
                                            rows="5">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="asal_pelapor"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Asal
                                        Pelapor</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control bg-gray-1 py-3" name="asal"
                                            id="asal_pelapor" placeholder="Kota/Kabupaten/Provinsi"
                                            value="{{ old('asal') }}" />
                                        @error('asal')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanda_pengenal"
                                        class="col-sm-3 col-form-label fs-sm d-flex align-items-center">Upload Tanda
                                        pengenal</label>
                                    <div class="col-sm-9">
                                        <div class="position-relative">
                                            <div class="input-group d-flex align-items-center gap-3" style="z-index: 999">
                                                <div class="input-group-append">
                                                    <label
                                                        class="browse rounded-4 py-3 px-5 btn btn-outline-dark text-danger">
                                                        Pilih File
                                                        <input type="file"
                                                            class="custom-file-input file position-absolute d-none"
                                                            name="kartu_identitas" id="upload_file"
                                                            value="{{ old('kartu_identitas') }}" />
                                                    </label>
                                                </div>
                                                <p class="m-0">
                                                    **KTP/SIM/Identitas pengenal
                                                    lainnya
                                                </p>
                                            </div>
                                            @error('kartu_identitas')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <button type="submit" name="role" value="masyarakat"
                                    class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
                                    role="button" data-bs-toggle="modal" data-bs-target="#modalSubmitPengaduan">REGISTER
                                    <img src="{{ asset('wbs-assets/img/icons/plane.svg') }}" alt="Send"
                                        class="icon d-inline-block" />
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="modal fade" id="modalSubmitPengaduan" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
                        <div class="modal-content bg-primary custom-border border-white">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close shadow-none bg-img-none p-0 pe-4"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    <img class="mw-100" src="{{ asset('wbs-assets/img/icons/close-bordered.svg') }}"
                                        alt="" title="" />
                                </button>
                            </div>
                            <div class="modal-body py-4 px-5">
                                <div class="d-flex justify-content-center flex-column">
                                    <img src="{{ asset('wbs-assets/img/icons/timer.svg') }}" alt=""
                                        class="icons d-block mx-auto mw-100 mb-4" />
                                    <p class="text-white text-center">
                                        Pengaduan anda sedang diajukan, silahkan pantau
                                        perkembangan pengaduan anda di bagian pantau
                                        pengaduan
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-outline-light py-2 px-5 d-inline-block" href="pengaduanmasyarakat"
                                        role="button">Ok</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
