<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Penelahaan</title>
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
								class="nav-link me-3 active"
								aria-current="page"
								href="pengaduan"
								>Beranda</a
							>
							<a class="nav-link me-3" href="informasi"
								>Informasi</a
							>
							<a class="nav-link me-3" href="datalaporan"
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
					<nav class="navbar navbar-expand">
						<ul class="navbar-nav">
							<img
								src="assets/img/icons/circle.svg"
								alt="circle.svg"
								class="icon"
							/>
							<li class="nav-item">
								<a
								class="nav-link fw-bold" href="pengaduan"
								>Pengaduan</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold" href="tercatat"
									>Tercatat</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold active" href="penelahaan"
									>Penelahaan</a
								>
							</li>
							<li class="nav-item">
								<a
									class="nav-link fw-bold"
									href="auditinvestigasi"
									>Audit Investigasi</a
								>
							</li>
							<li class="nav-item">
								<a
									class="nav-link fw-bold"
									href="pelimpahan"
									>Pelimpahan</a
								>
							</li>
						</ul>
					</nav>
					<div class="table-responsive">
						<table class="table table-borderless custom-table">
							<thead>
								<tr>
									<th class="fw-semibold" scope="col">
										No. Agenda
									</th>
									<th class="fw-semibold" scope="col">
										Tgl Agenda
									</th>
									<th class="fw-semibold" scope="col">
										Nama Terlapor
									</th>
									<th class="fw-semibold" scope="col">
										Pokok Permasalahan
									</th>
									<th class="fw-semibold" scope="col">
										Analisis berdasarkan ketentuan peraturan								
									</th>
									<th class="fw-semibold" scope="col">
										Action
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>001</td>
									<td>30 Juni 2022</td>
									<td>Ahmad S.</td>
									<td>Lorem Ipsum is simply ...</td>
									<td>Lorem Ipsum is simply ...</td>
									<td class="p-3" style="width: 20%">
										<div
											class="d-flex justify-content-center align-items-center gap-3"
										>
											<div
												class="d-flex justify-content-center gap-3 flex-column"
											>
												<a
													class="btn border-3 border-dark d-flex shadow"
													href="detailpenelahaan"
													role="button"
													><img
														src="assets/img/icons/edit.svg"
														alt="edit.svg"
														class="icon"
													/>Edit</a
												>
												<a
													class="btn border-2 border-dark d-flex shadow"
													role="button"
													><img
														src="assets/img/icons/trash.svg"
														alt="trash.svg"
														class="icon"
													/>Hapus</a
												>
											</div>
											<a href="detailpenelahaan">
												<img
													src="assets/img/icons/arrow-circle-right.svg"
													alt="arrow-circle-right.svg"
													class="icon"
												/>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>002</td>
									<td>28 Juni 2022</td>
									<td>Thoriq Harizul</td>
									<td>Lorem Ipsum is simply ...</td>
                                    <td>Lorem Ipsum is simply ...</td>
									<td class="p-3" style="width: 20%">
										<div
											class="d-flex justify-content-center align-items-center gap-3"
										>
											<div
												class="d-flex justify-content-center gap-3 flex-column"
											>
												<a
													class="btn border-3 border-dark d-flex shadow"
													href="detailpenelahaan"
													role="button"
													><img
														src="assets/img/icons/edit.svg"
														alt="edit.svg"
														class="icon"
													/>Edit</a
												>
												<a
													class="btn border-2 border-dark d-flex shadow"
													role="button"
													><img
														src="assets/img/icons/trash.svg"
														alt="trash.svg"
														class="icon"
													/>Hapus</a
												>
											</div>
											<a href="detailpenelahaan">
												<img
													src="assets/img/icons/arrow-circle-right.svg"
													alt="arrow-circle-right.svg"
													class="icon"
												/>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>003</td>
									<td>18 Juni 2022</td>
									<td>Ahmad Fauzi F.</td>
									<td>Lorem Ipsum is simply ...</td>
									<td>Lorem Ipsum is simply ...</td>
									<td class="p-3" style="width: 20%">
										<div
											class="d-flex justify-content-center align-items-center gap-3"
										>
											<div
												class="d-flex justify-content-center gap-3 flex-column"
											>
												<a
													class="btn border-3 border-dark d-flex shadow"
													href="detailpenelahaan"
													role="button"
													><img
														src="assets/img/icons/edit.svg"
														alt="edit.svg"
														class="icon"
													/>Edit</a
												>
												<a
													class="btn border-2 border-dark d-flex shadow"
													role="button"
													><img
														src="assets/img/icons/trash.svg"
														alt="trash.svg"
														class="icon"
													/>Hapus</a
												>
											</div>
											<a href="detailpenelahaan">
												<img
													src="assets/img/icons/arrow-circle-right.svg"
													alt="arrow-circle-right.svg"
													class="icon"
												/>
											</a>
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
