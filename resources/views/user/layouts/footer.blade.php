<footer id="footer" class="{{ Request::is('/') ? '' : 'bg-blue-light' }}">
    <div
        class="container {{ Request::is('login') || Request::is('lupa-password') || Request::is('dashboard') ? 'd-none' : '' }}">
        <div class="footer-widget py-5 d-flex flex-wrap justify-content-between gap-3">
            <div class="col-lg-3">
                <a href="{{ url('/') }}" class="brand-image brand-link bg-transparent border-bottom">
                    <img class="mw-100" src="{{ asset('wbs-assets/img/logo-svg.svg') }}" alt="" title=""
                        width="350" />
                </a>
                <p class="text-secondary word-break">
                    Sistem pelaporan pelanggaran yang memungkinkan
                    setiap pegawai untuk melaporkan adanya Pelanggaran
                    yang kerahasiaan identitas Pelapor dijamin serta
                    diberikan perlindungan oleh pimpinan Kementerian
                    Komunikasi dan Informatika.
                </p>
            </div>
            <div class="col-lg-3 py-3">
                <h4 class="m-0">Data Pendukung</h4>
                <div class="navbar flex-wrap px-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Peraturan Walikota Malang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">Tugas & Fungsi Inspektorat</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 py-3">
                <h4 class="m-0">Hubungi Kami</h4>
                <p class="text-secondary word-break">
                    Hubungi kami apabila anda membutuhkan bantuan lebih
                    lanjut tentang Whistlebowling
                </p>
                <ul class="list-unstyled">
                    <li class="mb-1 d-flex gap-3 flex-wrap">
                        <div>
                            <img src="{{ asset('wbs-assets/img/icons/home.svg') }}" alt="Home" class="icon" />
                        </div>
                        <div class="col-10">
                            <p class="m-0">Inspektorat Kota Malang</p>
                            <address class="m-0 text-secondary word-break">
                                Jl. Gajahmada No.2A, Kiduldalem, Kec.
                                Klojen, Kota Malang, Jawa Timur 65119
                            </address>
                        </div>
                    </li>
                    <li class="mb-1 d-flex gap-3 flex-wrap">
                        <div>
                            <img src="{{ asset('wbs-assets/img/icons/mail.svg') }}" alt="Home" class="icon" />
                        </div>
                        <div class="col-10">
                            <p class="m-0">Email</p>
                            <span class="m-0 text-secondary word-break">
                                whistleblower.inspektorat@malangkota.go.id
                            </span>
                        </div>
                    </li>
                    <li class="mb-1 d-flex gap-3 flex-wrap">
                        <div>
                            <img src="{{ asset('wbs-assets/img/icons/phone.svg') }}" alt="Home" class="icon" />
                        </div>
                        <div class="col-10">
                            <p class="m-0">No. Telp</p>
                            <span class="m-0 text-secondary word-break">
                                0341364450
                            </span>
                        </div>
                    </li>
                    <li class="mb-1 d-flex gap-3 flex-wrap">
                        <div>
                            <img src="{{ asset('wbs-assets/img/icons/web.svg') }}" alt="Home" class="icon" />
                        </div>
                        <div class="col-10">
                            <p class="m-0">Website</p>
                            <span class="m-0 text-secondary word-break">
                                whistleblower.inspektoratmalangkota.go.id
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div
        class="{{ Request::is('/') || Request::is('login') || Request::is('lupa-password') ? 'bg-blue-light' : 'bg-body' }} py-3">
        <div class="container">
            <p class="text-md-right m-0">
                © 2022 Pemerintah Kota Malang - All Rights Reserved
            </p>
        </div>
    </div>
</footer>
