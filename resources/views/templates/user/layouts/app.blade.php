<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Whistleblowing System Kota Malang</title>
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

	@yield('content')

	<footer id="footer">
		<div class="py-5 mx-4 mx-lg-auto">
			<div
				class="container custom-border border-purple p-4 rounded-3"
			>
				<div
					class="footer-widget d-flex flex-wrap justify-content-between gap-3"
				>
					<div class="col-lg-3">
						<a
							href="#!"
							class="brand-image brand-link bg-transparent border-bottom"
						>
							<img
								class="mw-100"
								src="/assets/img/logo-svg.svg"
								alt=""
								title=""
								width="350"
							/>
						</a>
						<p class="text-secondary word-break">
							Sistem pelaporan pelanggaran yang
							memungkinkan setiap pegawai untuk melaporkan
							adanya Pelanggaran yang kerahasiaan
							identitas Pelapor dijamin serta diberikan
							perlindungan oleh pimpinan Kementerian
							Komunikasi dan Informatika.
						</p>
					</div>
					<div class="col-lg-3 py-3">
						<h4 class="m-0">Data Pendukung</h4>
						<div class="navbar flex-wrap px-0">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link p-0" href="#!"
										>Peraturan Walikota Malang</a
									>
								</li>
								<li class="nav-item">
									<a class="nav-link p-0" href="#!"
										>Tugas & Fungsi Inspektorat</a
									>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 py-3">
						<h4 class="m-0">Hubungi Kami</h4>
						<p class="text-secondary word-break">
							Hubungi kami apabila anda membutuhkan
							bantuan lebih lanjut tentang Whistlebowling
						</p>
						<ul class="list-unstyled">
							<li class="mb-1 d-flex gap-3 flex-wrap">
								<div>
									<img
										src="assets/img/icons/home.svg"
										alt="Home"
										class="icon"
									/>
								</div>
								<div class="col-10">
									<p class="m-0">
										Inspektorat Kota Malang
									</p>
									<address
										class="m-0 text-secondary word-break"
									>
										Jl. Gajahmada No.2A, Kiduldalem,
										Kec. Klojen, Kota Malang, Jawa
										Timur 65119
									</address>
								</div>
							</li>
							<li class="mb-1 d-flex gap-3 flex-wrap">
								<div>
									<img
										src="assets/img/icons/mail.svg"
										alt="Home"
										class="icon"
									/>
								</div>
								<div class="col-10">
									<p class="m-0">Email</p>
									<span
										class="m-0 text-secondary word-break"
									>
										whistleblower.inspektorat@malangkota.go.id
									</span>
								</div>
							</li>
							<li class="mb-1 d-flex gap-3 flex-wrap">
								<div>
									<img
										src="assets/img/icons/phone.svg"
										alt="Home"
										class="icon"
									/>
								</div>
								<div class="col-10">
									<p class="m-0">No. Telp</p>
									<span
										class="m-0 text-secondary word-break"
									>
										0341364450
									</span>
								</div>
							</li>
							<li class="mb-1 d-flex gap-3 flex-wrap">
								<div>
									<img
										src="assets/img/icons/web.svg"
										alt="Home"
										class="icon"
									/>
								</div>
								<div class="col-10">
									<p class="m-0">Website</p>
									<span
										class="m-0 text-secondary word-break"
									>
										whistleblower.inspektoratmalangkota.go.id
									</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
			<div class="container">
				<p class="text-md-right m-0">
					© 2022 Pemerintah Kota Malang - All Rights Reserved
				</p>
			</div>
		
	</footer>

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

	
    
</html>