<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Pantau Pengaduan</title>
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
							Progress Pengaduan
						</h3>
						<div class="col-lg-6 p-0">
							<form action="#!">
								<div class="input-group rounded-3 border">
									<button
										type="input"
										class="input-group-text bg-white border-0 pl-4"
										id="formInput"
									>
										<img
											src="assets/img/icons/search.svg"
											alt="search"
											class="icon d-inline-block"
										/>
									</button>
									<input
										type="text"
										class="form-control fs-sm form-control-lg bg-white border-0 text-secondary"
										placeholder="Cari nama terlapor"
										aria-label="Cari pengajuan anda disini"
										aria-describedby="formInput"
									/>
								</div>
							</form>
						</div>
					</div>
					<div class="container mt-5 px-2">
						<div
							class="table-responsive border-2 border border-dark rounded-3"
						>
							<table class="table table-borderless">
								<thead
									class="text-center border-bottom border-2 border-dark"
								>
									<tr>
										<th scope="col" width="5%">
											<input
												id="checkAll"
												class="form-check-input"
												type="checkbox"
											/>
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
									<tr>
										<th scope="row">
											<input
												class="tableCheck form-check-input"
												type="checkbox"
											/>
										</th>
										<td>Ahmad Fauzi F.</td>
										<td>Sekretariat DPRD</td>
										<td>Penelahaan</td>
										<td>
											Pengaduan anda sedang diproses,
											mohon ditunggu.
										</td>
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
														src="assets/img/icons/arrow-down.svg"
													/>
												</a>
												<div
													class="dropdown-menu text-center shadow border-2 border-dark"
													aria-labelledby="userDropdown"
												>
													<a
														class="dropdown-item"
														href="lihatpengaduan"
													>
														View
													</a>
													<div
														class="dropdown-divider"
													></div>
													<a
														type="button"
														data-bs-toggle="modal"
														data-bs-target="#modalPengaduan"
														class="dropdown-item"
													>
														Batal
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<input
												class="tableCheck form-check-input"
												type="checkbox"
											/>
										</th>
										<td>Thoriq Harizul</td>
										<td>Inspektorat</td>
										<td>Audit Investigasi</td>
										<td>
											Pengaduan anda sedang diproses,
											mohon ditunggu.
										</td>
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
														src="assets/img/icons/arrow-down.svg"
													/>
												</a>
												<div
													class="dropdown-menu text-center shadow border-2 border-dark"
													aria-labelledby="userDropdown"
												>
													<a
														class="dropdown-item"
														href="lihatpengaduan"
													>
														View
													</a>
													<div
														class="dropdown-divider"
													></div>
													<a
														class="dropdown-item"
														href="#!"
													>
														Batal
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">
											<input
												class="tableCheck form-check-input"
												type="checkbox"
											/>
										</th>
										<td>Ahmad S.</td>
										<td>Inspektorat</td>
										<td>Pelimpahan</td>
										<td>
											Pengaduan anda sedang diproses,
											mohon ditunggu.
										</td>
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
														src="assets/img/icons/arrow-down.svg"
													/>
												</a>
												<div
													class="dropdown-menu text-center shadow border-2 border-dark"
													aria-labelledby="userDropdown"
												>
													<a
														class="dropdown-item"
														href="lihatpengaduan"
													>
														View
													</a>
													<div
														class="dropdown-divider"
													></div>
													<a
														class="dropdown-item"
														href="#!"
													>
														Batal
													</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
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
			id="modalPengaduan"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 800px"
			>
				<div
					class="modal-content bg-blue-secondary-95 custom-border border-white"
				>
					<div class="modal-header">
						<img
							src="assets/img/logo-diskominfo.svg"
							alt=""
							class="d-block ms-auto mw-100"
						/>
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
						<p class="mb-4 text-white text-center">
							Apakah anda yakin ingin membatalkan pengaduan anda ?
						</p>
						<div class="d-flex justify-content-center">
							<div
								class="col-md-6 d-flex justify-content-center flex-column gap-3"
							>
								<a
									class="btn btn-primary bg-orange-light border-0 text-black py-3"
									href="pengaduanmasyarakat"
									role="button"
									>Ya</a
								>
								<a
									class="btn btn-primary bg-orange-light border-0 text-black py-3"
									href="pengaduanpegawai"
									role="button"
									>Tidak</a
								>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/app.js" type="text/javascript"></script>
		<script>
			$(".table-responsive").on("show.bs.dropdown", function () {
				$(".table-responsive").css("overflow", "inherit");
			});

			$(".table-responsive").on("hide.bs.dropdown", function () {
				$(".table-responsive").css("overflow", "auto");
			});
			let checkAll = $("#checkAll");
			let tableCheck = $(".tableCheck");
			$("#checkAll").click(function () {
				if (!checkAll.prop("checked")) {
					tableCheck.prop("checked", false);
				} else {
					tableCheck.prop("checked", true);
				}
			});
		</script>
	</body>
</html>
