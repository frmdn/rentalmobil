@extends('public.layout.page')

@section('content')
<div class="container mb-5">
    @foreach ($data as $mobil)
    <div class="row list-item">
        <div class="col-sm-2">
            <img src="img/{{ $mobil->gambar_mobil }}" alt="placeholder" class="img-thumbnail">
        </div>
        <div class="col-sm-5">
            <p class="h5">{{ $mobil->merk_mobil }} {{ $mobil->nama_mobil }}</p>
            <p><i class="fa fa-car"></i> {{ $mobil->kategori_mobil }}</p>
            <p><i class="fa fa-user"></i> {{ $mobil->kapasitas_mobil }} orang</p>
        </div>
        <div class="col-sm-3" style="margin: auto;">
            <p class="h5">Rp {{ number_format($mobil->tarif_mobil,2) }}</p>
        </div>
        <div class="col-sm-2" style="margin: auto;">
            <a class="btn btn-sm btn-success" href="https://api.whatsapp.com/send?phone=628988255078&text=Halo%20Gan%2C%20Saya%20tertarik%20untuk%20menyewa%20mobil%20merk%20{{ $mobil->nama_mobil }}">Pilih</a>
        </div>
    </div>
    @endforeach
</div>
@endsection