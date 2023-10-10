<!DOCTYPE html>
<html lang="en">
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Data Laporan</title>
		<link href="assets/css/admin.css" rel="stylesheet" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div class="bg-blue-light">
			<nav class="navbar navbar-expand-lg py-4">
				<div class="container">
					<a class="navbar-brand" href="#!">
						<img
							class="mw-100"
							src="/assets/img/logo.png"
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
								class="nav-link me-3"
								aria-current="page"
								href="pengaduan"
								>Beranda</a
							>
							<a class="nav-link me-3" href="informasi"
								>Informasi</a
							>
							<a class="nav-link me-3 active" href="datalaporan"
								>Data Laporan</a
							>
							<a class="nav-link me-3" href="dashboard"
								>Dashboard</a
							>
							<a
								type="button"
								class="btn border-1 border-dark d-flex"
								role="button"
								data-bs-toggle="modal"
								data-bs-target="#modalLogout"
								><span>
									<img
										src="assets/img/icons/logout.svg"
										alt="logout.svg"
										class="icon"
									/>
								</span>
								Keluar</a
							>
						</div>
					</div>
				</div>
			</nav>
			<main class="py-4">
				<div class="container">
					<form
						action="#!"
						class="row g-3 custom-form align-items-center"
					>
						<div class="col-auto">
							<select
								class="form-select border-dark bg-transparent py-3"
								aria-label="Default select example"
							>
								<option selected>Bulan</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						<div class="col-auto">
							<select
								class="form-select border-dark bg-transparent py-3"
								aria-label="Default select example"
							>
								<option selected>Tahun</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						<div class="col-auto">
							<button
								class="btn bg-transparent rounded-2 text-dark border border-2 border-dark py-2"
								role="button"
								type="submit"
							>
								Search
							</button>
						</div>
						<div class="col-auto">
							<button
								class="btn bg-transparent rounded-2 text-dark border border-2 border-dark py-2"
								role="button"
								type="reset"
							>
								Reset
							</button>
						</div>
						<div class="col-auto">
							<span class="d-flex">
								<a
									class="d-flex btn bg-orange rounded-2 text-dark py-2"
									role="button"
									href="#!"
								>
									Download
									<img
										src="assets/img/icons/download-light.svg"
										alt="download-light.svg"
										class="icon"
									/>
								</a>
							</span>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table table-borderless custom-table">
							<thead>
								<tr>
									<th class="fw-semibold" scope="col">
										Tgl Pengaduan
									</th>
									<th class="fw-semibold" scope="col">
										Perihal
									</th>
									<th class="fw-semibold" scope="col">
										Nama Pelapor
									</th>
									<th class="fw-semibold" scope="col">
										Nama Terlapor
									</th>
									<th class="fw-semibold" scope="col">
										Jabatan Terlapor
									</th>
									<th class="fw-semibold" scope="col">
										Perangkat Daerah
									</th>
									<th class="fw-semibold" scope="col">
										Tanggal Kejadian
									</th>
									<th class="fw-semibold" scope="col">
										Detail kejadian
									</th>
									<th class="fw-semibold" scope="col">
										Status
									</th>
									<th
										class="fw-semibold"
										scope="col"
										style="width: 5%"
									></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>28 Juni 2022</td>
									<td>Melapor</td>
									<td>Siti R.</td>
									<td>Ahmad S.</td>
									<td>Pegawai Daerah</td>
									<td>Inspektorat</td>
									<td>28 Maret 2022</td>
									<td>Lorem Ipsum is simply ...</td>
									<td>Direkomendasi</td>
									<td class="position-relative p-3 p-3">
										<div
											class="dropdown dropdown-center no-arrow"
										>
											<a
												class="dropdown-toggle"
												type="button"
												data-bs-toggle="dropdown"
												data-bs-auto-close="true"
												aria-expanded="false"
											>
												<img
													class="icon d-inline-block"
													src="assets/img/icons/three-dots.svg"
												/>
											</a>
											<div
												class="dropdown-menu rounded-0 bg-blue-light text-center shadow border border-2 border-dark"
												aria-labelledby="userDropdown"
											>
												<div
													class="d-flex justify-content-center align-items-center flex-column"
												>
													<a
														class="d-flex text-decoration-none text-dark border-bottom border-2 border-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														Lihat
														<img
															src="assets/img/icons/double-arrow-right.svg"
															alt="download-light.svg"
															class="icon"
														/> </a
													><a
														class="d-flex text-decoration-none text-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														<img
															src="assets/img/icons/download-light.svg"
															alt="download-light.svg"
															class="icon"
														/>Download File
													</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>26 Juni 2022</td>
									<td>Melapor</td>
									<td>Achmad Syarif</td>
									<td>Thoriq Harizul</td>
									<td>Pegawai Daerah</td>
									<td>Kepala Bidang</td>
									<td>30 Maret 2022</td>
									<td>Lorem Ipsum is simply ...</td>
									<td>Direkomendasi</td>
									<td class="position-relative">
										<div
											class="dropdown dropdown-center no-arrow"
										>
											<a
												class="dropdown-toggle"
												type="button"
												data-bs-toggle="dropdown"
												data-bs-auto-close="true"
												aria-expanded="false"
											>
												<img
													class="icon d-inline-block"
													src="assets/img/icons/three-dots.svg"
												/>
											</a>
											<div
												class="dropdown-menu rounded-0 bg-blue-light text-center shadow border border-2 border-dark"
												aria-labelledby="userDropdown"
											>
												<div
													class="d-flex justify-content-center align-items-center flex-column"
												>
													<a
														class="d-flex text-decoration-none text-dark border-bottom border-2 border-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														Lihat
														<img
															src="assets/img/icons/double-arrow-right.svg"
															alt="download-light.svg"
															class="icon"
														/> </a
													><a
														class="d-flex text-decoration-none text-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														<img
															src="assets/img/icons/download-light.svg"
															alt="download-light.svg"
															class="icon"
														/>Download File
													</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>16 Juni 2022</td>
									<td>Melapor</td>
									<td>Helmi Zulfan F.</td>
									<td>Ahmad Fauzi F.</td>
									<td>Pegawai Daerah</td>
									<td>Sekretariat DPRD</td>
									<td>1 April 2022</td>
									<td>Lorem Ipsum is simply ...</td>
									<td>Direkomendasi</td>
									<td class="position-relative p-3">
										<div
											class="dropdown dropdown-center no-arrow"
										>
											<a
												class="dropdown-toggle"
												type="button"
												data-bs-toggle="dropdown"
												data-bs-auto-close="true"
												aria-expanded="false"
											>
												<img
													class="icon d-inline-block"
													src="assets/img/icons/three-dots.svg"
												/>
											</a>
											<div
												class="dropdown-menu rounded-0 bg-blue-light text-center shadow border border-2 border-dark"
												aria-labelledby="userDropdown"
											>
												<div
													class="d-flex justify-content-center align-items-center flex-column"
												>
													<a
														class="d-flex text-decoration-none text-dark border-bottom border-2 border-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														Lihat
														<img
															src="assets/img/icons/double-arrow-right.svg"
															alt="download-light.svg"
															class="icon"
														/> </a
													><a
														class="d-flex text-decoration-none text-dark w-100 justify-content-center"
														role="button"
														href="#!"
													>
														<img
															src="assets/img/icons/download-light.svg"
															alt="download-light.svg"
															class="icon"
														/>Download File
													</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</div>
		<footer id="footer">
			<div class="bg-white py-3">
				<div class="container">
					<p class="text-md-right m-0">
						© 2021 Pemerintah Kota Malang - All Rights Reserved
					</p>
				</div>
			</div>
		</footer>
		<!-- Modal Logout -->
		<div
			class="modal fade"
			id="modalLogout"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 800px"
			>
				<div class="modal-content bg-blue-light custom-border">
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
							<p class="text-black text-center fw-semibold">
								Apakah anda yakin akan keluar dari sistem ini?
							</p>
						</div>
						<div class="mx-w-fit-content mx-auto">
							<div
								class="d-flex justify-content-center gap-3 flex-column"
							>
								<a
									class="btn btn-light bg-success rounded-2 text-white border-0 py-2 px-5 fw-semibold"
									href="admin"
									role="button"
									>Ya</a
								>
								<a
									class="btn btn-light bg-danger rounded-2 text-white border-0 py-2 px-5 fw-semibold"
									role="button"
									data-bs-dismiss="modal"
									aria-label="Close"
									>Tidak</a
								>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/app.js" type="text/javascript"></script>
	</body>
</html>
