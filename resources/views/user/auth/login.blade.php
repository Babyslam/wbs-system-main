@extends('user.layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <h1>
                <span class="fs-3 fw-semibold">Pantau</span><span class="text-danger fw-bold"> PENGADUAN</span>
            </h1>
            <p class="mb-4">
                Kami sangat menghargai informasi yang Anda laporkan. Fokus
                kami kepada materi informasi yang Anda Laporkan. Untuk
                memantau progress tindak lanjut atas pengaduan Anda,
                silahkan memasukkan username dan kata sandi Anda pada form
                login dibawah ini. Jika Anda belum memiliki Akun, silahkan
                <span><a type="button" data-bs-toggle="modal" data-bs-target="#modalPengaduan"
                        class="text-black fw-semibold">Buat Akun dan Tulis Pengaduan.</a>
                </span>
            </p>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="mx-4 mx-lg-auto">
                <div class="container rounded-4 p-4 bg-blue-light mb-4" style="max-width: 800px">
                    <h3 class="card-title mb-4">
                        LO<span class="text-danger">GIN</span>
                    </h3>
                    <div class="mb-3">
                        <label for="username" class="form-label fs-sm fw-semibold">Username</label>
                        <input type="text" class="form-control bg-white py-3" id="username" placeholder="Username"
                            name="username" />
                        @error('username')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-sm fw-semibold">Password</label>
                        <input type="password" class="form-control bg-white py-3" id="password" placeholder="Password"
                            name="password" />
                        @error('password')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="kode_keamanan" class="col-sm-3 col-form-label fs-sm fw-semibold">Kode Keamanan</label>
                        <div class="col-sm-9">
                            <div class="captcha mb-3">
                                <img src="{{ asset('wbs-assets/img/captcha.png') }}" alt="" class="mw-100 d-block"
                                    width="240" />
                            </div>
                            <label for="kode_kemamanan" class="form-label">Masukkan kode keamanan diatas:</label>
                            <input type="text" class="form-control bg-white py-3" id="kode_kemamanan"
                                placeholder="Masukkan kode keamanan (6 Karakter)" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-w-fit-content mx-auto">
                <div class="d-flex justify-content-center gap-3 flex-column">
                    <button type="submit"
                        class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold">
                        LOGIN
                        <img src="{{ asset('wbs-assets/img/icons/login.svg') }}" alt="Send"
                            class="icon d-inline-block" />
                    </button>
                    <a class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
                        href="{{ url('/lupa-password') }}" role="button">LUPA PASSWORD
                        <img src="{{ asset('wbs-assets/img/icons/forgot-password.svg') }}" alt="Send"
                            class="icon d-inline-block" /></a>
                </div>
            </div>
        </form>
    </main>
    <div class="modal fade" id="modalPengaduan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
            <div class="modal-content bg-blue-secondary-95 custom-border border-white">
                <div class="modal-header">
                    <img src="{{ asset('wbs-assets/img/logo-diskominfo.svg') }}" alt=""
                        class="d-block ms-auto mw-100" />
                    <button type="button" class="btn-close shadow-none bg-img-none p-0 pe-4" data-bs-dismiss="modal"
                        aria-label="Close">
                        <img class="mw-100" src="{{ asset('wbs-assets/img/icons/close.svg') }}" alt=""
                            title="" />
                    </button>
                </div>
                <div class="modal-body py-4 px-5">
                    <p class="mb-4 text-white text-center">
                        Pilih salah satu kotak dibawah ini, untuk
                        melanjutkan pengajuan pengaduan anda !
                    </p>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6 d-flex justify-content-center flex-column gap-3">
                            <a class="btn btn-primary bg-orange-light border-0 text-black py-3"
                                href="{{ url('/pengaduan/masyarakat') }}" role="button">Pengaduan sebagai Masyarakat</a>
                            <a class="btn btn-primary bg-orange-light border-0 text-black py-3"
                                href="{{ url('/pengaduan/pegawai') }}" role="button">Pengaduan sebagai Pegawai Daerah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
