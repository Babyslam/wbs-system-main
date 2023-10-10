<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Informasi</title>
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
								href="pengaduan"
								>Beranda</a
							>
							<a class="nav-link me-3" href="informasi"
								>Informasi</a
							>
							<a class="nav-link me-3" href="data-laporan"
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
					<div class="chart">
						<h5 class="text-center">Your Chart</h5>
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
