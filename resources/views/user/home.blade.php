@extends('user.layouts.app')

@section('content')
    <main class="py-4">
        <div class="px-4 py-2 my-5 text-center position-relative">
            <div class="hero-shape" style="bottom: -4.5rem">
                <img class="w-100" src="{{ asset('wbs-assets/img/shapes/waves.svg') }}" alt="" />
            </div>
            <img class="d-block mx-auto mw-100 mb-4" src="{{ asset('wbs-assets/img/logo-svg.svg') }}" alt=""
                width="600" />
            <div class="col-lg-6 mx-auto">
                <p class="fw-light mb-5">
                    Mari bersama-sama menciptakan Pemerintahan yang jujur
                    dan bersih. Laporkan setiap pelanggaran yang terjadi di
                    lingkungan kerja Pemerintah Kota Malang.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center py-5">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <div class="bg-gradient-hexagon"></div>
                        <a class="hexagon text-decoration-none"
                            style="
									background-image: url({{ asset('wbs-assets/img/shapes/bg-buat-laporan.svg') }});
								"
                            type="button" data-bs-toggle="modal" data-bs-target="#modalPengaduan">
                            <div class="text text-white">Buat Laporan</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 10rem; padding-bottom: 10rem">
            <h2 class="fw-semibold mb-4">
                Defenisi
                <span class="text-gradient">WhistleBlowing</span>
                System
            </h2>
            <p class="mb-0">
                Sistem pelaporan pelanggaran mekanisme penyampaian pengaduan
                dugaan tindak pidana korupsi yang terjadi yang melibatkan
                pegawai dan orang lain yang berkaitan dengan dugaan tindak
                pidana korupsi yang dilakukan di dalam organisasi tempatnya
                bekerja.
            </p>
        </div>
        <div class="position-relative">
            <div id="shapeTop" class="hero-shape shape-top">
                <img class="w-100" src="{{ asset('wbs-assets/img/shapes/blue-shape-top.svg') }}" alt="" />
            </div>
            <div id="shapeBottom" class="hero-shape shape-bottom">
                <img class="w-100" src="{{ asset('wbs-assets/img/shapes/blue-shape-bottom.svg') }}" alt="" />
            </div>
            <div class="bg-blue-light py-5">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-decoration-underline">
                            Kriteria Pengaduan
                        </h2>
                        <p class="fw-light">
                            Syarat/Kriteria Laporan Agar Bisa Diproses Lebih
                            Lanjut
                        </p>
                    </div>
                    <div class="container row row-cols-1 row-cols-lg-3 justify-content-center my-5 gap-4 m-0 custom-card">
                        <div class="card d-flex justify-content-center align-items-center shadow position-relative carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        1
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            WHAT
                                        </h5>
                                        <p class="card-text fw-500">
                                            Apa perbuatan berindikasi Tindak
                                            Pidana Korupsi/pelanggaran yang
                                            diketahui
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center shadow carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        2
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            WHO
                                        </h5>
                                        <p class="card-text fw-500">
                                            Siapa yang bertanggungjawab/
                                            terlibat dan terkait dalam
                                            perbuatan tersebut
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center shadow carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        3
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            WHERE
                                        </h5>
                                        <p class="card-text fw-500">
                                            Dimana tempat terjadinya
                                            perbuatan tersebut dilakukan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center shadow carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        4
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            WHEN
                                        </h5>
                                        <p class="card-text fw-500">
                                            Kapan waktu perbuatan
                                            pelanggaran tersebut dilakukan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center shadow carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        5
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            HOW
                                        </h5>
                                        <p class="card-text fw-500">
                                            Bagaimana cara perbuatan
                                            tersebut dilakukan (modus, cara,
                                            dan sebagainya)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center align-items-center shadow carret">
                            <div class="row g-0">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <h3 class="display-3 fw-semibold m-0">
                                        6
                                    </h3>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">
                                            EVIDENCE
                                        </h5>
                                        <p class="card-text fw-500">
                                            Dilengkapi bukti permulaan
                                            (dokumen / gambar / rekaman)
                                            yang mendukung
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        Anda tidak perlu khawatir terungkapnya identitas
                        diri anda karena Inspektorat Kota Malang akan
                        <span class="text-danger">MERAHASIAKAN & MELINDUNGI</span>
                        Identitas Anda sebagai whistleblower. Kami sangat
                        menghargai informasi yang Anda laporkan. Fokus kami
                        kepada materi informasi yang Anda Laporkan. Sebagai
                        bentuk terimakasih kami terhadap laporan yang Anda
                        kirim, kami berkomitmen untuk merespon laporan Anda
                        selambat-lambatnya 15 (Lima Belas) hari kerja sejak
                        laporan Anda dikirim.
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 10rem; padding-bottom: 3rem">
            <div class="text-center">
                <h2 class="text-decoration-underline">
                    Tata cara pengaduan
                </h2>
                <p class="fw-light">
                    Tata Cara Membuat Pengaduan Melalui WBS
                </p>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center my-5 gap-5 m-0 custom-card-2">
                <div
                    class="card d-flex justify-content-center align-items-center position-relative bg-blue-light carret-2 one order-1">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <h3 class="display-4 fw-semibold m-0">1</h3>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="card-text fw-500">
                                    Apa perbuatan berindikasi Tindak Pidana
                                    Korupsi/pelanggaran yang diketahui
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-flex justify-content-center align-items-center bg-blue-light carret-2 two order-2">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <h3 class="display-4 fw-semibold m-0">2</h3>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="card-text fw-500">
                                    Laporkan melalui web WBS Pemerintah Kota
                                    Malang:
                                    <a href="https://wbs.malang.go.id">https://wbs.malang.go.id</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="card d-flex justify-content-center align-items-center bg-blue-light carret-2 three order-lg-4 order-3">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <h3 class="display-4 fw-semibold m-0">3</h3>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="card-text fw-500">
                                    Pelapor mendapatkan akun untuk memantau
                                    pengaduan dan berkomunikasi dengan tim
                                    Verifikator Whistlebowling System
                                    Selesai. Pengaduan diproses. Pelapor
                                    dapat memantau progress tindak lanjut
                                    pengaduan dengan akun yang telah
                                    diberikan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card d-flex justify-content-center align-items-center bg-blue-light order-lg-3 order-4">
                    <div class="row g-0">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <h3 class="display-4 fw-semibold m-0">4</h3>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <p class="card-text fw-500">
                                    Selesai. Pengaduan diproses. Pelapor
                                    dapat memantau progress tindak lanjut
                                    pengaduan dengan akun yang telah
                                    diberikan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue-light py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-decoration-underline">
                        STATISTIK PENGADUAN
                    </h2>
                    <p class="fw-light">
                        Statistik Pengaduan Pada WBS Pemerintah Kota Malang
                    </p>
                </div>
                <div class="chart">
                    <h5 class="text-center">Your Chart</h5>
                </div>
            </div>
        </div>
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
