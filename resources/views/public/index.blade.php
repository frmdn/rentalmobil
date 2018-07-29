@extends('public.layout.landing')

@section('content')

<div class="bgbos" style="height: 100vh;">
    <div class="flex-center flex-column" style="background-color: rgba(0,0,0,0.2);">
        <h1 class="animated fadeIn mb-4 white-text">Rental Mobil</h1>
        <h5 class="animated fadeIn mb-3 white-text">Rental dimana saja, kapan saja. Liburan Puas !</h5>
    </div>
</div>

<section id="rekomendasi" class="mainsection">
    <div class="container">
        <p class="h1 text-center mb-5">Rekomendasi Kendaraan</p>
        <!-- Grid row -->
        <div class="row">
            @foreach($data as $mobil)
            <div class="col-lg-4 col-md-12">
                <!--Card-->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view">
                        <img src="img/{{ $mobil->gambar_mobil }}" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">{{ $mobil->merk_mobil }} {{ $mobil->nama_mobil }}</h4>
                        <!--Text-->
                        <p class="card-text">Sewa mulai dari Rp {{ number_format($mobil->tarif_mobil,2) }} / hari</p>
                        <p class="card-text">Kapasitas {{ $mobil->kapasitas_mobil }} orang</p>
                        <a href="list" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            @endforeach
        </div>
        <!-- Grid row -->
    </div>
</section>

<section id="benefit" class="mainsection">
    <div class="container">
        <p class="h1 text-center mb-5">Keuntungan</p>
        <div class="row">
            <div class="col-4 text-center">
                <i class="fa fa-bolt fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Konfirmasi Instan</p>
                <p>Pemesanan Anda terjamin & pikiran lebih tenang.</p>
            </div>
            <div class="col-4 text-center">
                <i class="fa fa-lock fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Jaminan untuk setiap Pemesanan</p>
                <p>Kami memantau setiap pemesanan untuk memastikan Anda mendapatkan mobil yang Anda pilih atau setara.</p>
            </div>
            <div class="col-4 text-center">
                <i class="fa fa-shield fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Pikiran Tenang!</p>
                <p>Drive.ID melindungi Anda dari perusahaan rental mobil yang tidak baik.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4 text-center">
                <i class="fa fa-umbrella fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Kami ada dimana-mana</p>
                <p>Temukan mobil-mobil yang menarik untuk disewa lebih dari 19 kota di Indonesia.</p>
            </div>
            <div class="col-4 text-center">
                <i class="fa fa-usd fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Jaminan Harga Terbaik</p>
                <p>Bandingkan seluruh mitra kami untuk mendapatkan harga terbaik di sini.</p>
            </div>
            <div class="col-4 text-center">
                <i class="fa fa-headphones fa-5x" aria-hidden="true"></i>
                <p class="grid-head">Kami di sini untuk membantu, 24/7!</p>
                <p>Kami nyata dan ada sepanjang waktu, di mana saja di Indonesia. Hubungi Kami.</p>
            </div>
        </div>
    </div>
</section>

@endsection