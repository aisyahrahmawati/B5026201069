@extends('layout.ceria')
@section('title', 'Daftar Pegawai SM Ent.')

<style>
    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .tambah {
        margin-left: 920px;
        color: rgb(0, 0, 0);
    }

    #pegawai {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 70%;
        text-align: center;
        margin-left: 250px;
        border-collapse: collapse;
    }

    #pegawai td,
    #pegawai th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }

    #pegawai tr:nth-child(even) {
        background-color: #c7baaa;
    }

    #pegawai tr:hover {
        background-color: #dddddd;
    }

    #pegawai th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #fdfdfd;
        color: black;
    }

</style>

@section('isikonten')

    <h2>Daftar Pegawai SM Ent.</h2>
    <div class="tambah">
        <button type="button" class="btn btn-warning">
            <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </button>
    </div>

<div class="container" style="margin-left: 300px; margin-bottom: 20px; margin-top: 20px">
	<form action="/pegawai/cari" method="GET">
		<input class="form-control col-md-8" type="text" name="cari" placeholder="Cari Pegawai.." value="{{ old('cari') }}">
		<input class="form-control col-md-8 btn-success" type="submit" value="Cari">
	</form>
</div>

    <table id="pegawai" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Ket.</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/detail/{{ $p->pegawai_id }}">
                        <button type="button" class="btn btn-warning">Detail</button>
                    </a>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">
                        <button type="button" class="btn btn-info">Edit</button>
                    </a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    {{  $pegawai->links() }}

@endsection
