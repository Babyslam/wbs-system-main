<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Lupa Password</title>
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
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a
							class="nav-link me-3 active"
							aria-current="page"
							href="index.html"
							>Beranda</a
						>
						<a class="nav-link me-3" href="#!">Informasi</a>
						<a class="nav-link" href="#!">Pantau Pengaduan</a>
					</div>
				</div>
			</div>
		</nav>
		<main
			class="py-4 min-vh-75 d-flex justify-content-center align-items-center"
		>
			<div
				class="container rounded-4 p-4 bg-blue-light mb-4"
				style="max-width: 800px"
			>
				<h3 class="card-title mb-4">RESET PASSWORD</h3>
				<div class="mb-5">
					<label for="email" class="form-label fs-sm fw-semibold"
						>E-mail</label
					>
					<input
						type="email"
						class="form-control bg-white py-3"
						id="email"
						placeholder="Masukkan email yang terdaftar di sistem ini"
					/>
				</div>
				<div class="mx-w-fit-content mx-auto">
					<div
						class="d-flex justify-content-center gap-3 flex-column"
					>
						<a
							class="btn btn-light bg-orange rounded-4 text-white border-0 py-3 px-5 fw-semibold"
							href="#!"
							role="button"
							data-bs-toggle="modal"
							data-bs-target="#modalResetPassword"
							>RESET PASSWORD</a
						>
					</div>
				</div>
			</div>
		</main>
		<footer id="footer">
			<div class="bg-blue-light py-3">
				<div class="container">
					<p class="text-md-right m-0">
						© 2022 Pemerintah Kota Malang - All Rights Reserved
					</p>
				</div>
			</div>
		</footer>
		<div
			class="modal fade"
			id="modalResetPassword"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				style="max-width: 600px"
			>
				<div
					class="modal-content bg-blue-light custom-border border-white"
				>
					<div class="modal-body py-4 px-5">
						<div class="d-flex justify-content-center flex-column">
							<img
								src="assets/img/icons/double-checked.svg"
								alt=""
								class="d-block mx-auto mw-100 mb-4"
							/>
							<p class="text-white text-center">
								Password berhasil di reset ! Periksa e-mail anda
							</p>
						</div>
						<div class="text-center">
							<a
								class="btn btn-outline-light py-2 px-5 d-inline-block"
								href="login"
								role="button"
								>Ok</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/app.js" type="text/javascript"></script>
		<!-- jQuery-MultiSelect -->
		<script src="assets/vendor/jQuery-MultiSelect/jquery.multiselect.js"></script>
	</body>
</html>
