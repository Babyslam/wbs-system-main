@extends('user.layouts.app-dashboard')

@section('content')
    <div class="bg-blue-light">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-between mb-4">
                    <h3 class="col-lg-6 p-0 text-decoration-underline mb-sm-3 mb-lg-auto">
                        Progress Pengaduan
                    </h3>
                    <div class="col-lg-6 p-0">
                        <form action="#!">
                            <div class="input-group rounded-3 border">
                                <button type="input" class="input-group-text bg-white border-0 pl-4" id="formInput">
                                    <img src="{{ asset('wbs-assets/img/icons/search.svg') }}" alt="search"
                                        class="icon d-inline-block" />
                                </button>
                                <input type="text"
                                    class="form-control fs-sm form-control-lg bg-white border-0 text-secondary"
                                    placeholder="Cari nama terlapor" aria-label="Cari pengajuan anda disini"
                                    aria-describedby="formInput" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container mt-5 px-2">
                    <div class="table-responsive border-2 border border-dark rounded-3">
                        <table class="table table-borderless">
                            <thead class="text-center border-bottom border-2 border-dark">
                                <tr>
                                    <th scope="col" width="5%">
                                        <input id="checkAll" class="form-check-input" type="checkbox" />
                                    </th>
                                    <th scope="col" width="20%">
                                        Pengaduan terhadap terlapor
                                    </th>
                                    <th scope="col" width="10%">
                                        Perangkat Daerah Terlapor
                                    </th>
                                    <th scope="col" width="20%">Status</th>
                                    <th scope="col" width="30%">Catatan</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach (Auth::user()->pengaduans as $pengaduan)
                                    <tr>
                                        <th scope="row">
                                            <input class="tableCheck form-check-input" type="checkbox" />
                                        </th>
                                        <td>{{ $pengaduan->nama_terlapor }}</td>
                                        <td>{{ $pengaduan->perangkat_daerah }}</td>
                                        <td>{{ $pengaduan->status }}</td>
                                        <td>
                                            @if ($pengaduan->catatan)
                                                {{ $pengaduan->catatan }}
                                            @else
                                                Pengaduan anda sedang diproses, mohon ditunggu.
                                            @endif
                                        </td>
                                        <td class="position-relative">
                                            <div class="dropdown dropdown-center no-arrow">
                                                <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="true" aria-expanded="false">
                                                    <img class="icon d-inline-block"
                                                        src="{{ asset('wbs-assets/img/icons/arrow-down.svg') }}" />
                                                </a>
                                                <div class="dropdown-menu text-center shadow border-2 border-dark"
                                                    aria-labelledby="userDropdown">
                                                    <a class="dropdown-item"
                                                        href="{{ url('/dashboard/pengaduan/' . $pengaduan->id) }}">
                                                        View
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/dashboard/pengaduan/' . $pengaduan->id . '/batal') }}">
                                                        Batal
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
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
                        Apakah anda yakin ingin membatalkan pengaduan anda ?
                    </p>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6 d-flex justify-content-center flex-column gap-3">
                            <a class="btn btn-primary bg-orange-light border-0 text-black py-3" href="pengaduanmasyarakat"
                                role="button">Ya</a>
                            <a class="btn btn-primary bg-orange-light border-0 text-black py-3" href="pengaduanpegawai"
                                role="button">Tidak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
