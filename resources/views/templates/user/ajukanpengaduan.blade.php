<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Ajukan Pengaduan</title>
		<link href="assets/css/app.css" rel="stylesheet" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<!-- jQuery-MultiSelect -->
		<link
			rel="stylesheet"
			href="assets/vendor/jQuery-MultiSelect/jquery.multiselect.css"
		/>
	</head>
	<body>
		<div class="bg-blue-light">
			<nav class="navbar navbar-expand-lg py-4">
				<div class="container">
					<a class="navbar-brand" href="#!">
						<img
							class="mw-100"
							src="/assets/img/logo-svg.svg"
							alt=""
							title=""
							width="300"
						/>
					</a>
					<button
						class="navbar-toggler ms-auto"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup"
						aria-controls="navbarNavAltMarkup"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div
						class="collapse navbar-collapse"
						id="navbarNavAltMarkup"
					>
						<div class="navbar-nav ms-auto align-items-center">
							<a
								class="nav-link me-3 active"
								aria-current="page"
								href="pantaupengaduan"
								>Beranda</a
							>
							<a
								class="nav-link me-3"
								href="ajukanpengaduan"
								>Ajukan Pengaduan</a
							>
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle"
									href="#"
									id="userDropdown"
									role="button"
									data-bs-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
								>
									<img
										class="img-profile rounded-circle"
										src="assets/img/profile.svg"
									/>
									<span
										class="mr-2 d-none d-lg-inline text-gray-600 small"
										>Salman A.</span
									>
								</a>
								<!-- Dropdown - User Information -->
								<div
									class="dropdown-menu dropdown-menu-right shadow border-2 border-dark"
									aria-labelledby="userDropdown"
								>
									<a
										class="dropdown-item"
										href="editprofil"
									>
										<img
											src="assets/img/icons/person.svg"
											alt="Send"
											class="icon d-inline-block"
										/>
										Edit Profil
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="home">
										<img
											src="assets/img/icons/logout.svg"
											alt="Send"
											class="icon d-inline-block"
										/>
										Keluar
									</a>
								</div>
							</li>
						</div>
					</div>
				</div>
			</nav>
			<main class="py-4">
				<div class="container">
					<h1>
						<span class="fs-3 fw-semibold">Tulis</span
						><span class="text-danger fw-bold"> PENGADUAN</span>
					</h1>
					<p class="mb-4">
						Apabila Anda mendapati adanya pelanggaran di lingkungan
						Pemerintah Kota Malang, laporkan pada Inspektorat Kota
						Malang. Laporan Anda akan ditindaklanjuti apabila sesuai
						dengan syarat/kriteria Laporan. Anda tidak perlu
						khawatir terungkapnya identitas diri anda karena
						Inspektorat Kota Malang akan
						<span class="text-danger"
							>MERAHASIAKAN & MELINDUNGI</span
						>
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
						<div class="mb-3 d-flex gap-3 flex-wrap">
							<div
								class="d-flex justify-content-center align-items-start"
							>
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
									<label
										for="nama_terlapor"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Nama dilaporkan</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="nama_terlapor"
											placeholder="Nama Pihak yang terlapor"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="jabatan"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Jabatan</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="jabatan"
											placeholder="Jabatan Pihak yang terlapor"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="perangkat_daerah"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Perangkat Daerah</label
									>
									<div class="col-sm-9">
										<select
											name="perangkat_daerah[]"
											multiple="multiple"
											id="perangkat_daerah"
											class="form-control form-select bg-gray-1 py-3"
										>
											<option value="Sekretariat DPRD">
												Sekretariat DPRD
											</option>
											<option value="Inspektorat">
												Inspektorat
											</option>
											<option
												value="Badan Pengelolaan Keuangan dan Pajak Daerah"
											>
												Badan Pengelolaan Keuangan dan
												Pajak Daerah
											</option>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tempat"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Tempat</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="tempat"
											placeholder="Tempat kejadian"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tanggal"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Tanggal</label
									>
									<div class="col-sm-9">
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="tanggal"
											placeholder="Tanggal kejadian"
										/>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="detail_kejadian"
										class="col-sm-3 col-form-label fs-sm"
										>Kejadian</label
									>
									<div class="col-sm-9">
										<textarea
											class="form-control bg-gray-1 py-3"
											id="detail_kejadian"
											placeholder="Detail kejadian yang dilaporkan"
											rows="5"
										></textarea>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="tanda_pengenal"
										class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
										>Bukti Pendukung</label
									>
									<div class="col-sm-9">
										<div class="position-relative">
											<input
												type="file"
												class="custom-file-input file position-absolute"
												name="upload_file"
												id="upload_file"
												value=""
											/>
											<div
												class="input-group d-flex align-items-center gap-3"
												style="z-index: 999"
											>
												<div class="input-group-append">
													<button
														type="button"
														class="browse rounded-4 py-3 px-5 btn btn-outline-light border border-1 border-dark text-danger"
													>
														Pilih File
													</button>
												</div>
												<div class="d-flex gap-3">
													<button
														type="button"
														class="btn btn-success text-black py-2 d-flex align-items-center"
													>
														+ Tambah
													</button>
													<button
														type="button"
														class="btn btn-danger text-black py-2 d-flex align-items-center"
													>
														<img
															src="assets/img/icons/trash.svg"
															alt="Trash"
															class="icon"
														/>
														Hapus
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-3 row">
									<label
										for="kode_keamanan"
										class="col-sm-3 col-form-label fs-sm"
										>Kode Keamanan</label
									>
									<div class="col-sm-9">
										<div class="captcha mb-3">
											<img
												src="assets/img/captcha.png"
												alt=""
												class="mw-100 d-block"
												width="240"
											/>
										</div>
										<label
											for="kode_kemamanan"
											class="form-label"
											>Masukkan kode keamanan
											diatas:</label
										>
										<input
											type="text"
											class="form-control bg-gray-1 py-3"
											id="kode_kemamanan"
											placeholder="Masukkan kode keamanan (6 Karakter)"
										/>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<div class="col-md-6 d-flex justify-content-center">
								<a
									class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
									href="pengaduanmasyarakat"
									role="button"
									data-bs-toggle="modal"
									data-bs-target="#modalSubmitPengaduan"
									>KIRIM PENGADUAN
									<img
										src="assets/img/icons/plane.svg"
										alt="Send"
										class="icon d-inline-block"
								/></a>
							</div>
						</div>
					</div>
				</div>
                
		</div>
		<footer id="footer">
			<div class="bg-white py-3">
				<div class="container">
					<p class="text-md-right m-0">
						© 2022 Pemerintah Kota Malang - All Rights Reserved
					</p>
				</div>
			</div>
		</footer>
        <div
			class="modal fade"
			id="modalSubmitPengaduan"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 800px"
			>
				<div
					class="modal-content bg-white"
					style="background: url(assets/img/shapes/bg-gradient.svg)"
				>
					<div class="modal-header border-0">
						<button
							type="button"
							class="btn-close shadow-none bg-img-none p-0 pe-4"
							data-bs-dismiss="modal"
							aria-label="Close"
						>
							<img
								class="mw-100"
								src="/assets/img/icons/close.svg"
								alt=""
								title=""
							/>
						</button>
					</div>
					<div class="modal-body py-4 px-5">
						<div class="d-flex justify-content-center flex-column">
							<img
								src="assets/img/logo-diskominfo.svg"
								alt=""
								class="d-block mx-auto mw-100 mb-4"
							/>
							<p class="text-primary text-center">
								Pengaduan anda sedang diajukan, silahkan pantau
								perkembangan pengaduan anda di bagian pantau
								pengaduan
							</p>
						</div>
						<div class="text-center">
							<a
								class="btn btn-outline-primary py-2 px-5 d-inline-block"
								href="ajukanpengaduan"
								role="button"
								>Ok</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
        <style>
			.file {
				visibility: hidden;
				position: absolute;
			}
		</style>
		<script src="assets/js/app.js" type="text/javascript"></script>
        <!-- jQuery-MultiSelect -->
		<script src="assets/vendor/jQuery-MultiSelect/jquery.multiselect.js"></script>
		<script>
			$("select[multiple]#perangkat_daerah").multiselect({
				search: true,
				texts: {
					placeholder: "Perangkat Daerah yang terlapor",
					search: "Ketik nama Perangkat Daerah disini ...",
				},
			});
		</script>
	</body>
</html>
