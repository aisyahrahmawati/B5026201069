@extends('layout.ceria')

@section('title', 'Data Absen Pegawai')

<style>
    form {
        padding: 40px;
        width: 60%;
        background-color: #c7baaa;
        margin: auto;
        box-align: initial;
    }

    h3 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .container {
        padding: 20px;
        margin-left: 85px;
        margin-bottom: 220px;
    }

    </style>

@section('isikonten')

<h3>Tambah Absensi Pegawai SM Ent.</h3>

    <div class="container">
	<form class="form form-horizontal" action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-body">
        <div class="row">
            <div class="col-md-2">
		<label>Pegawai</label>
    </div>
    <div class="col-md-8 form-group">
        <select id="idpegawai" name="idpegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
    </div>
            <div class="col-md-4">
                    <label for="absensi">Tanggal</label>
            </div>
                    <div class="col-md-2 form-group">
                    <input type="datetime-local" id="tanggal" name="tanggal">
            </div>
                <div class="col-md-8">
            <label>Status Absensi</label>
        </div>
       <div class="col-md-8 form-group">
           <input type="radio" id="hadir" name="status" value="H">
  <label for="hadir">Hadir</label><br>
  <input type="radio" id="tidak" name="status" value="T" checked="checked">
  <label for="tidak">Tidak Hadir</label><br>
</div>
<div class="col-sm-2">
    <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
</div>
<div class="col-sm-2">
    <button class="btn btn-warning" type="reset" value="kembali"><a href="/absen">Kembali</a></button>
</div>
    </div>
</div>
</div>
	</form>

@endsection

