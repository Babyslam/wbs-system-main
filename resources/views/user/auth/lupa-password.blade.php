<!DOCTYPE html>
@extends('user.layouts.app')

@section('content')
    <main class="py-4 min-vh-75 d-flex justify-content-center align-items-center">
        <div class="container rounded-4 p-4 bg-blue-light mb-4" style="max-width: 800px">
            <h3 class="card-title mb-4">RESET PASSWORD</h3>
            <div class="mb-5">
                <label for="email" class="form-label fs-sm fw-semibold">E-mail</label>
                <input type="email" class="form-control bg-white py-3" id="email"
                    placeholder="Masukkan email yang terdaftar di sistem ini" />
            </div>
            <div class="mx-w-fit-content mx-auto">
                <div class="d-flex justify-content-center gap-3 flex-column">
                    <a class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold" href="#"
                        role="button" data-bs-toggle="modal" data-bs-target="#modalResetPassword">RESET
                        PASSWORD</a>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="modalResetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 600px">
            <div class="modal-content bg-blue-light custom-border border-white">
                <div class="modal-body py-4 px-5">
                    <div class="d-flex justify-content-center flex-column">
                        <img src="assets/img/icons/double-checked.svg" alt="" class="d-block mx-auto mw-100 mb-4" />
                        <p class="text-white text-center">
                            Password berhasil di reset ! Periksa e-mail anda
                        </p>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-light py-2 px-5 d-inline-block" href="login" role="button">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
