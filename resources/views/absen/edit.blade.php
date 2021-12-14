@extends('layout.ceria')

@section('title', 'Absen Pegawai')

<style>
form {
    padding: 40px;
    width: 100%;
    background-color: rgba(206, 149, 149, 0.867);
    margin: 2px, 0, 0, 0;
    box-align: initial;
}
</style>

@section('isikonten')

@section('judulhalaman', 'Edit Absensi Pegawai SM Ent.')

@foreach ($absen as $a)
    <div class="container">
        <h5>Pastikan data yang Anda masukkan benar</h5>
        <form action="/absen/update" class="form-horizontal" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="row">

                    <div class="mb-3">
                        <input type="hidden" name="id" value="{{ $a->ID }}">
                        <label>Pegawai :</label>
                    </div>
                    <div class="form-group col-sm-2">
                        <select id="idpegawai" name="idpegawai" required="required">
                            @foreach ($pegawai as $p)
                                <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>
                                    {{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="dtpickerdemo">Tanggal :</label>
                    <div class="form-group col-sm-2 input-group date" id='dtpickerdemo'>
                        <input type='datetime-local' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Status Absensi :</label>
                </div>
                <div class="mb-3">
                    <input type="radio" id="hadir" name="status" value="H" @if ($a->Status === 'H') checked="checked" @endif>
                    <label for="hadir">Hadir</label>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked" @if ($a->Status === 'T') checked="checked" @endif>
                    <label for="tidak">Tidak Hadir</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-6">
                    <button type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/absen"> Kembali</a>
                    </button>
            </div>
            <div class="col">
                <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
            </div>

    </div>
    </div>
    </div>
    </div>
    </form>

    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: "YYYY-MM-DD hh:mm",
                "defaultDate": new Date()
            });
        });
    </script>
@endforeach

@endsection
