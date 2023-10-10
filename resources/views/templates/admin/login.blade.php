<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Login</title>
		<link href="assets/css/admin.css" rel="stylesheet" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body
		class="bg-login"
		style="background-image: url(assets/img/background.jpg)"
	>
		<div class="bg-overlay min-vh-100">
			<div
				class="container"
				style="
					position: absolute;
					left: 50%;
					top: 50%;
					transform: translate(-50%, -50%);
				"
			>
				<div class="d-flex justify-content-center">
					<div class="login-box">
						<div
							class="card card-login pt-4 pb-5 position-relative"
						>
							<div class="bg-gradient-hexagon"></div>
							<div class="text-center">
								<a href="admin" class="brand-wrap">
									<img
										class="mw-100 logo"
										src="assets/img/logo.svg"
										style="
											width: 400px;
											height: 90px;
											object-fit: contain;
										"
										alt="Logo"
										title="Logo"
									/>
								</a>
							</div>
							<div class="card-body p-4">
								<h3 class="text-center mb-4 text-white">
									Login
								</h3>
								<form method="POST" action="login" class="px-4">
									<div class="input-group mb-3">
										<div
											class="input-group-text bg-white px-4 py-3 border-end-0"
										>
											<img
												src="assets/img/icons/user.svg"
												alt="user"
												class="icon"
											/>
										</div>
										<input
											id="id"
											type="text"
											class="form-control bg-red ps-0 px-4 py-3 border-start-0 shadow-none border"
											name="id"
											placeholder="Masukkan ID"
											required
										/>
									</div>
									<div class="input-group mb-3">
										<div
											class="input-group-text bg-white px-4 py-3 border-end-0"
										>
											<img
												src="assets/img/icons/lock.svg"
												alt="user"
												class="icon"
											/>
										</div>
										<input
											id="password"
											type="password"
											class="form-control bg-white ps-0 px-4 py-3 border-start-0 shadow-none border"
											name="password"
											placeholder="Masukkan Password"
											required
										/>
									</div>
									<div class="border-top border-bottom p-4">
										<!-- <button
										type="submit"
										class="btn btn-primary btn-block bg-gradient-1 border-0 w-100 py-2 fs-5"
									>
										Login
									</button> -->
										<a
											type="button"
											href="pengaduan"
											class="btn btn-primary btn-block bg-gradient-1 border-0 w-100 py-2 fs-5"
										>
											Login
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/app.js" type="text/javascript"></script>
	</body>
</html>
