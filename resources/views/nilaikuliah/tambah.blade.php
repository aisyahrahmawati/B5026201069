@extends('layout.ceria')

<style>
    form {
        width: 60%;
        height: 50%;
        background-color: rgba(206, 149, 149, 0.867);
        margin-left: 250px;
        margin-top: 20px;
    }

    h3 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .container {
        padding: 20px;
        margin-left: 15px;
        margin-bottom: 180px;
    }

</style>

@section('title', 'Database Nilai Kuliah')
@section('isikonten')

    <h3>Tambah Nilai Kuliah</h3>

    <div class="container">
        <form class="form form-horizontal" action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label col-sm-2">NRP</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" name="nrp" required="required">
                    </div>
                    <div class="col-md-4">
                        <label>Nilai Angka</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" name="nilai" required="required">
                    </div>
                    <div class="col-md-4">
                        <label>SKS</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" name="sks" required="required">
                    </div>
                    <div class="col-md-4">
                        <label>Nilai Huruf</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" name="nilaih">
                    </div>
                    <div class="col-md-4">
                        <label>Bobot</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" name="bobot" value="$bobot">
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-warning" type="reset" value="kembali"><a href="/nilaikuliah">Kembali</a></button>
                    </div>
                </div>
            </div>
    </div>
    </form>
@endsection
