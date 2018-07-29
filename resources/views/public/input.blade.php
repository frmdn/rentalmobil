@extends('public.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Admin Rental Mobil</h1>

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>Tambah Data</h2></div>

      <div class="panel-body">

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

        @endif


        @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.

            <ul>

                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif

        <form action="upload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_mobil" class="form-control" placeholder="Nama Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Merk Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="merk_mobil" class="form-control" placeholder="Merk Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kapasitas Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="kapasitas_mobil" class="form-control" placeholder="Kapasitas Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kategori Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="kategori_mobil" class="form-control" placeholder="Kategori Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Plat Nomor Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="plat_mobil" class="form-control" placeholder="Plat Nomor Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tarif Sewa Mobil</label>
                <div class="col-sm-10">
                    <input type="text" name="tarif_mobil" class="form-control" placeholder="Tarif Sewa Mobil">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Upload Gambar Mobil</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection