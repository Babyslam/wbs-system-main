<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>editprofil</title>
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
					<div class="row justify-content-between mb-4">
						<h3
							class="col-lg-6 p-0 text-decoration-underline mb-sm-3 mb-lg-auto"
						>
							Edit Profil
						</h3>
					</div>
					<div class="container mt-5 px-2">
						<div class="mb-3 row">
							<div class="d-flex align-items-center">
								<div class="col-sm-3">
									<img
										class="rounded-circle border border-3 border-white"
										src="assets/img/profile.svg"
										width="180"
										height="180"
									/>
								</div>
								<div class="col-sm-9">
									<div class="d-flex gap-3">
										<a
											class="btn bg-gradient-1 rounded-3 text-white border-0 py-3 px-5 fw-semibold"
											href="#!"
											role="button"
											>Upload new picture</a
										>
										<a
											class="text-decoration-none py-3 px-5 border-gradient-custom text-white fw-semibold"
											href="#!"
											role="button"
											data-bs-toggle="modal"
											data-bs-target="#modalDeleteProfilePict"
											>Delete</a
										>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3 row">
							<label
								for="nama_lengkap"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Nama Lengkap</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="nama_lengkap"
									placeholder="Nama Lengkap"
									value="Salman A"
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
									class="form-control bg-white py-3 px-4"
									id="jabatan"
									placeholder="Jabatan"
									value="Pegawai Daerah"
								/>
							</div>
						</div>
						<div class="mb-3 row">
							<label
								for="email"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>E-mail</label
							>
							<div class="col-sm-9">
								<input
									type="email"
									class="form-control bg-white py-3 px-4"
									id="email"
									placeholder="Alamat E-Mail"
									value="salman@gmail.com"
								/>
							</div>
						</div>
						<div class="mb-3 row">
							<label
								for="no_telp"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>No. Telp</label
							>
							<div class="col-sm-9">
								<input
									type="text"
									class="form-control bg-white py-3 px-4"
									id="no_telp"
									placeholder="No. Telp"
									value="081265394578"
								/>
							</div>
						</div>
						<div class="mb-5 row">
							<label
								for="tanda_pengenal"
								class="col-sm-3 col-form-label fs-sm d-flex align-items-center"
								>Tanda pengenal</label
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
												class="browse rounded-4 py-3 px-5 btn btn-outline-dark text-danger"
											>
												Pilih File
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a
								class="btn btn-light bg-orange rounded-3 text-white border-0 py-3 px-5 fw-semibold"
								href="#!"
								role="button"
								data-bs-toggle="modal"
								data-bs-target="#modalUpdateProfile"
								>Simpan</a
							>
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
		<div
			class="modal fade"
			id="modalDeleteProfilePict"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 600px"
			>
				<div
					class="modal-content bg-custom-dark custom-border border-white"
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
								src="/assets/img/icons/close-bordered.svg"
								alt=""
								title=""
							/>
						</button>
					</div>
					<div class="modal-body py-4 px-5">
						<div class="d-flex justify-content-center flex-column">
							<img
								src="assets/img/icons/delete.svg"
								alt=""
								class="d-block mx-auto mw-100 mb-4"
							/>
							<p class="text-white text-center">
								Foto profil anda berhasil di hapus !
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div
			class="modal fade"
			id="modalUpdateProfile"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 600px"
			>
				<div
					class="modal-content bg-custom-dark custom-border border-white"
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
								src="/assets/img/icons/close-bordered.svg"
								alt=""
								title=""
							/>
						</button>
					</div>
					<div class="modal-body py-4 px-5">
						<div class="d-flex justify-content-center flex-column">
							<img
								src="assets/img/icons/stars.svg"
								alt=""
								class="d-block mx-auto mw-100 mb-4"
							/>
							<p class="text-white text-center">
								Profil anda berhasil di edit !
							</p>
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
	</body>
</html>
