<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
		<link href="assets/css/app.css" rel="stylesheet" />
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
								href="index.html"
								>Beranda</a
							>
							<a class="nav-link me-3" href="informasi.html"
								>Informasi</a
							>
							<a class="nav-link me-3" href="data-laporan.html"
								>Data Laporan</a
							>
							<a class="nav-link me-3" href="dashboard.html"
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
					<div class="mb-4">
						<h3 class="mb-sm-3 mb-lg-auto fw-bolder">Pengaduan</h3>
					</div>
					<form action="#!" class="custom-form">
						<div class="row">
							<div class="col-lg-4">
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Tanggal Surat Pengaduan</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Perihal</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Nama Pelapor</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Nama Terlapor</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Jabatan Terlapor</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Perangkat Daerah</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Tempat Kejadian</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Tanggal Kejadian</label
									>
									<input
										type="text"
										class="form-control border-dark bg-transparent py-3"
										id="tanggal"
									/>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Detail kejadian</label
									>
									<textarea
										name="detail"
										id="detail"
										rows="10"
										class="form-control border-dark bg-transparent py-3"
									>
Lorem Ipsum is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                                        </textarea
									>
								</div>
								<div class="mb-3 m-0">
									<label
										for="tanggal"
										class="form-label fs-sm fw-semibold"
										>Bukti dari Pelapor</label
									>

									<div
										class="border border-2 border-dark rounded p-4"
									>
										<div class="d-flex gap-3">
											<span
												class="d-flex align-items-center"
											>
												<a href="#!" class="pe-2">
													<img
														src="assets/img/icons/download.svg"
														alt="download.svg"
														class="icon"
														width="60px"
													/>
												</a>
												Bukti.mp4
											</span>
											<span
												class="d-flex align-items-center"
											>
												<a href="#!" class="pe-2">
													<img
														src="assets/img/icons/download.svg"
														alt="download.svg"
														class="icon"
														width="60px"
													/>
												</a>
												Bukti.mp4
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div
									class="d-flex justify-content-center gap-2 flex-column mx-auto"
									style="max-width: 200px"
								>
									<a
										class="btn btn-light bg-success rounded-2 text-dark border-0 py-2 px-5 fw-semibold d-flex gap-3 justify-content-center"
										href="index.html"
										role="button"
										data-bs-toggle="modal"
										data-bs-target="#modalSetujui"
										>Setujui<img
											src="assets/img/icons/checked.svg"
											alt="checked.svg"
											class="icon"
									/></a>
									<a
										class="btn btn-light bg-danger rounded-2 text-dark border-0 py-2 px-5 fw-semibold d-flex gap-2 justify-content-center"
										role="button"
										data-bs-toggle="modal"
										data-bs-target="#modalTolak"
										>Tolak<img
											src="assets/img/icons/close.svg"
											alt="close.svg"
											class="icon"
									/></a>
								</div>
							</div>
						</div>
					</form>
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
									href="index.html"
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
		<!-- Modal Setujui -->
		<div
			class="modal fade"
			id="modalSetujui"
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
								Apabila anda menyetujuinya mohon diisi terlebih
								dahulu untuk No. atau Tanggal Agendanya untuk
								ditindaklanjutkan
							</p>
						</div>
						<div class="mx-auto" style="max-width: 300px">
							<form action="#!">
								<div class="mb-3 m-0">
									<input
										type="text"
										class="form-control bg-white py-3 border-0"
										id="tanggal"
										placeholder="Input Tgl Agenda"
									/>
								</div>
								<div class="m-0">
									<input
										type="text"
										class="form-control bg-white py-3 border-0"
										id="tanggal"
										placeholder="Input No. Agenda"
									/>
								</div>
								<a
                                    href="tercatat"
									type="submit"
									class="btn btn-primary d-flex mx-auto fw-bold justify-content-center mt-4"
									style="width: 180px"
								>
									Submit
                            </a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal Tolak -->
		<div
			class="modal fade"
			id="modalTolak"
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
								Apabila anda menolak pengaduan tersebut mohon
								diisi alasan mengapa pengaduan tersebut tertolak
								dibawah ini
							</p>
						</div>
						<div class="mx-auto" style="max-width: 400px">
							<form action="#!">
								<textarea
									name="aa"
									id="aa"
									rows="10"
									class="form-control bg-white py-3"
								>
Masukkan alasan
								</textarea
								>
								<button
									type="submit"
									class="btn btn-primary d-flex mx-auto fw-bold justify-content-center mt-4"
									style="width: 180px"
								>
									Submit
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/app.js" type="text/javascript"></script>
	</body>
</html>
