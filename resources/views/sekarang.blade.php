<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Magra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<!-- Start Menu -->
	<form action="/kirimPesanan" method="post">
		@csrf
		<div class="menu-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading-title text-center">
							<h2 style="font-family: 'Reem Kufi Fun', sans-serif;">MENU</h2>
							<hr>
						</div>
					</div>
				</div>

				<div class="row inner-menu-box">
					<div class="col-3 kategorii">

						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-makanan-tab" data-toggle="pill" href="#v-pills-makanan" role="tab" aria-controls="v-pills-makanan" aria-selected="true">Makanan</a>
							<a class="nav-link" id="v-pills-minuman-tab" data-toggle="pill" href="#v-pills-minuman" role="tab" aria-controls="v-pills-minuman" aria-selected="false">Minuman</a>
							<a class="nav-link" id="v-pills-roti-tab" data-toggle="pill" href="#v-pills-roti" role="tab" aria-controls="v-pills-roti" aria-selected="false">Roti dan Kue</a>
						</div>
					</div>

					<div class="col-9">
						<div class="tab-content" id="v-pills-tabContent">

							<br>

							<div class="tab-pane fade show active" id="v-pills-makanan" role="tabpanel" aria-labelledby="v-pills-makanan-tab">
								<div class="row">
									@foreach($makanans as $makanan)
									<div class="col-lg-3 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
											<img src="../Pict/{{ $makanan -> gambar_produk }}" class="img-fluid" alt="Image" />
											<div class="why-text">
												<h4> {{ $makanan -> nama_produk }}</h4>
												<hr style="color: white;">
												<p>{{ $makanan -> deskripsi_produk }}</p>
											</div>
											<p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $makanan -> nama_produk }}</p>
											<p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($makanan -> harga_produk, 2, ',', '.') }} </p>
										</div>
										<div class="tombol">
											<i class="fa-solid fa-inbox"></i>
											<input type="checkbox" id="{{ $makanan->nama_produk }}" name="pesanan[]" value="{{ $makanan->nama_produk }}">Pilih
											<input type="number" id="{{ $makanan->nama_produk }}" name="jumlah_{{ $makanan->nama_produk }}" value="0" min="0" max="500" style="width: 40px;">
										</div>
									</div>
									@endforeach
								</div>
							</div>

							<div class="tab-pane fade" id="v-pills-minuman" role="tabpanel" aria-labelledby="v-pills-minuman-tab">
								<div class="row">
									@foreach ($minumans as $minuman)
									<div class="col-lg-3 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
											<img src="../Pict/{{ $minuman -> gambar_produk }}" class="img-fluid" alt="Image" />
											<div class="why-text">
												<h4> {{ $minuman -> nama_produk }}</h4>
												<hr style="color: white;">
												<p>{{ $minuman -> deskripsi_produk }}</p>
											</div>
											<p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $minuman -> nama_produk }}</p>
											<p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($minuman -> harga_produk, 2, ',', '.') }} </p>
										</div>
										<div class="tombol">
											<i class="fa-solid fa-inbox"></i>
											<input type="checkbox" id="{{ $minuman->nama_produk }}" name="pesanan[]" value="{{ $makanan->nama_produk }}">Pilih
											<input type="number" id="{{ $minuman->nama_produk }}" name="jumlah_{{ $makanan->nama_produk }}" value="0" min="0" max="500" style="width: 40px;">
										</div>
									</div>
									@endforeach
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-roti" role="tabpanel" aria-labelledby="v-pills-roti-tab">
								<div class="row">
									@foreach ($rotis as $roti)
									<div class="col-lg-3 col-md-6 special-grid drinks">
										<div class="gallery-single fix">
											<img src="../Pict/{{ $roti -> gambar_produk }}" class="img-fluid" alt="Image" />
											<div class="why-text">
												<h4> {{ $roti -> nama_produk }}</h4>
												<hr style="color: white;">
												<p>{{ $roti -> deskripsi_produk }}</p>
											</div>
											<p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $roti -> nama_produk }}</p>
											<p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($roti -> harga_produk, 2, ',', '.') }} </p>
										</div>
										<div class="tombol">
											<i class="fa-solid fa-inbox"></i>
											<input type="checkbox" id="{{ $roti->nama_produk }}" name="pesanan[]" value="{{ $makanan->nama_produk }}">Pilih
											<input type="number" id="{{ $roti->nama_produk }}" name="jumlah_{{ $makanan->nama_produk }}" value="0" min="0" max="500" style="width: 40px;">
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- form pesan -->
		<div class="ps">
			<h1 class="h1">Pesan Sekarang</h1>
		</div>
		<div class="wrapper">
			<input type="text" name="nama" id="" required placeholder="Nama Anda">
			<input type="text" name="alamat" id="" required placeholder="Alamat Lengkap Anda">
			<input type="number" name="nomor" id="" required placeholder="No.Telepon" class="col-lg-12;" style="height:50px;width:100%;" min="0">
			<textarea name="catatan" id="" cols="30" rows="10" placeholder="Catatan (optional)" style="margin-top:3%"></textarea>
			<!-- <button name="kirim">
			<p>Kirim</p>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
				viewBox="0 0 16 16">
				<path
					d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
				</path>
			</svg>
		</button> -->
			<button name="kirim" class="btn btn-success" style="width:100px; height:35px;">Kirim</button>
			<!-- <button type="button" class="btn btn-danger fa-solid fa-circle-exclamation">
			<p><a href="menu.php">BATAL</a></p>
		</button> -->
			<a href="/menu" class="btn btn-danger" style="width:100px; height:35px;">BATAL</a>
			<!-- <button type="button" class="btn btn-outline-danger"><a href="menu.php">BATAL</a></button> -->
		</div>
		<br>
	</form>

	<!-- end of from pesan -->
	@if(session('error'))
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
	@endif
	<!-- ALL JS FILES -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/menu.js"></script>
	<script>
		function tambah() {
			document.getElementById('demoInput').stepUp();
		}

		function kurang() {
			document.getElementById('demoInput').stepDown();
		}
	</script>

</body>

</html>