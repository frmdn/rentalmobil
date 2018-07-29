@extends('public.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Admin Rental Mobil</h1>

    <table class="table table-bordered">
        <thead>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Merk</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Kapasitas</th>
            <th class="text-center">Plat Nomor</th>
            <th class="text-center">Tarif</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
            @foreach ($data as $mobil)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $mobil->nama_mobil }}</td>
                <td>{{ $mobil->merk_mobil }}</td>
                <td>{{ $mobil->kategori_mobil }}</td>
                <td>{{ $mobil->kapasitas_mobil }}</td>
                <td>{{ $mobil->plat_mobil }}</td>
                <td>Rp {{ number_format($mobil->tarif_mobil,2) }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection