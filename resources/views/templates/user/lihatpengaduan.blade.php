<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Lihat Pengaduan</title>
		<link href="assets/css/app.css" rel="stylesheet" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
		<!-- multipleImgUpload -->
		<link
			rel="stylesheet"
			href="assets/vendor//image-uploader/dist/image-uploader.min.css"
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
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									1
								</h2>
							</div>
							<h5 class="card-title">
								Pengaduan Terhadap Terlapor (Nama yang Terlapor)
							</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Nama dilaporkan</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="Ahmad Fauzi"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									2
								</h2>
							</div>
							<h5 class="card-title">
								Perangkat Daerah Terlapor
							</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Perangkat Daerah</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="Sekretariat DPRD"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									3
								</h2>
							</div>
							<h5 class="card-title">Jabatan Terlapor</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Jabatan Terlapor</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="Kepala Bidang"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									4
								</h2>
							</div>
							<h5 class="card-title">Tempat Kejadian</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Tempat</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="Kantor"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									5
								</h2>
							</div>
							<h5 class="card-title">Tanggal Kejadian</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Tanggal</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="28 Maret 2022"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									6
								</h2>
							</div>
							<h5 class="card-title">Detail Kejadian</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Detail Kejadian</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_terlapor"
									placeholder="Nama Pihak yang terlapor"
									value="Detail Kejadian"
									disabled
								/>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="d-flex align-items-center gap-3">
							<div
								class="d-flex justify-content-center align-items-center position-relative custom-carret"
							>
								<h2 class="display-5 fw-semibold m-0 ms-4">
									7
								</h2>
							</div>
							<h5 class="card-title">Bukti Kejadian</h5>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_terlapor"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Bukti Pendukung</label
							>
							<div class="col-sm-9 bg-white rounded-3 p-3">
								<div id="multipleImgUpload" disabled></div>
							</div>
						</div>
					</div>
				</div>
			</main>
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
		<script src="assets/js/app.js" type="text/javascript"></script>
		<!-- FileUploadWithPreview -->
		<script
			type="text/javascript"
			src="assets/vendor/image-uploader/dist/image-uploader.min.js"
		></script>

		<script>
			let preloaded = [
				{ id: 1, src: "https://picsum.photos/500/500?random=1" },
				{ id: 2, src: "https://picsum.photos/500/500?random=2" },
			];
			$(document).ready(function () {
				$("#multipleImgUpload").imageUploader({
					preloaded: preloaded,
				});
			});
		</script>
	</body>
</html>
