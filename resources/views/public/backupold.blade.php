<!DOCTYPE html>
<html>
<head>
	<title>Rental Mobil</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header class="header mb-4">
		<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
			<div class="container">
				<a class="navbar-brand" href="#">Rental Mobil</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tentang</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Kontak</a>
						</li>
					</ul>
					<button class="btn btn-outline-success my-2 my-sm-0" type="button">Pesan Sekarang</button>
				</div>
			</div>
		</nav>
		{{-- <div class="overlay"></div> --}}
	</header>

	<main role="main">
		<section id="rekomendasi">
			<h1 class="text-center">Rekomendasi Kendaraan</h1>
			<div class="album py-5">
				<div class="container">
					<div class="row">
						@foreach($data as $mobil)
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="{{ $mobil->gambar_mobil }}" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">{{ $mobil->merk_mobil }} {{ $mobil->nama_mobil }}</h5>
									<p class="card-text">Sewa mulai dari Rp {{ number_format($mobil->tarif_mobil,2) }} / hari</p>
									<p class="card-text">Kapasitas {{ $mobil->kapasitas_mobil }} orang</p>
									<a href="#" class="btn btn-primary">Cari Mobil</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer class="footer">
		<div class="text-center">
			<p>Copyright &copy; 2018</p>		
			<p>Rental Mobil Terkini Terbaik Termurah</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>