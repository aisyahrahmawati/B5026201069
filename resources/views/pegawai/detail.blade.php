@extends('layout.ceria')

@section('title', 'Detail Data Pegawai SM Ent.')

<style>
    .container {
        background-color: rgba(206, 149, 149, 0.867);
        margin-left: 10px;
        margin-bottom: 250px;
        width: 60%;
        height: 50%;
    }

    h3 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

</style>

@section('judulhalaman', 'Detail Data Pegawai SM Ent.')
@section('isikonten')

        <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-warning" type="reset" value="kembali"><a href="/pegawai">Kembali</a></button>
        </div>

	@foreach($pegawai as $p)
    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="col-md-4">
                    <label>Nama</label>
                </div>
                <div class="col-md-8 form-group">
                    <label class="control-label col-sm-2">{{ $p->pegawai_nama }}</label>
                </div>
                <div class="col-md-4">
                    <label>Jabatan</label>
                </div>
                <div class="col-md-8 form-group">
                    <label class="control-label col-sm-2">{{ $p->pegawai_jabatan }}</label>
                </div>
                <div class="col-md-4">
                    <label>Umur</label>
                </div>
                <div class="col-md-8 form-group">
                    <label class="control-label col-sm-2">{{ $p->pegawai_umur }}</label>
                </div>
                <div class="col-md-4">
                    <label>Alamat</label>
                </div>
                <div class="col-md-8 form-group">
                    <label class="control-label col-sm-2">{{ $p->pegawai_alamat }}</label>
                </div>
            </div>
        </div>
    </div>
</div>
	@endforeach
@endsection

