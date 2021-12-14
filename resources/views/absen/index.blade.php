@extends('layout.ceria')

@section('title', 'Absen Pegawai')

<style>
    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .nb {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 20px;
    }

    #absen {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-collapse: collapse;
        width: 70%;
        text-align: center;
        margin-left: 250px;
    }

    #absen td,
    #absen th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }

    #absen tr:nth-child(even) {
        background-color: #c7baaa;
    }

    #absen tr:hover {
        background-color: #dddddd;
    }

    #absen th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #fdfdfd;
        color: black;
    }

    .tambah {
        margin-left: 900px;
        margin-bottom: 20px;
    }

    .tambah a {
        color: rgb(0, 0, 0);
    }

</style>

@section('isikonten')

    <h2>Absen Pegawai SM Ent.</h2>

    <div class="tambah">
        <button type="button" class="btn btn-warning">
            <a href="/absen/tambah"> + Tambah Absensi Baru</a>
        </button>
    </div>

    <table id="absen" border="1">
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Ket.</th>
        </tr>
        @foreach ($absen as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->pegawai_nama }}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status }}</td>
                <td>
                    <a href="/absen/edit/{{ $a->ID }}">
                        <button type="button" class="btn btn-info">Edit</button>
                    </a>
                    <a href="/absen/hapus/{{ $a->ID }}">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="nb">
        <h5>*Note</h5>
        <p>H : Hadir</p>
        <p>T : Tidak Hadir</p>
    </div>

    {{ $absen->links() }}
@endsection
