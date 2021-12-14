@extends('layout.ceria')
@section('title', 'Database Blueray')

<style>
    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .tambah {
        margin-left: 920px;
        color: rgb(0, 0, 0);
    }

    #blueray {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 70%;
        text-align: center;
        margin-left: 250px;
        border-collapse: collapse;
    }

    #blueray td,
    #blueray th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }

    #blueray tr:nth-child(even) {
        background-color: #c7baaa;
    }

    #blueray tr:hover {
        background-color: #dddddd;
    }

    #blueray th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #fdfdfd;
        color: black;
    }

</style>

@section('isikonten')

    <h2>Database Blueray</h2>
    <div class="tambah">
        <button type="button" class="btn btn-warning">
            <a href="/blueray/tambah"> + Tambah Blueray Baru</a>
        </button>
    </div>

<div class="container" style="margin-left: 300px; margin-bottom: 20px; margin-top: 20px">
	<form action="/blueray/cari" method="GET">
		<input class="form-control col-md-8" type="text" name="cari" placeholder="Cari Blueray.." value="{{ old('cari') }}">
		<input class="form-control col-md-8 btn-success" type="submit" value="Cari">
	</form>
</div>

    <table id="blueray" border="1">
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Ket.</th>
        </tr>
        @foreach ($blueray as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->merkblueray }}</td>
                <td>{{ $b->stockblueray }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/blueray/detail/{{ $b->kodeblueray }}">
                        <button type="button" class="btn btn-warning">Detail</button>
                    </a>
                    <a href="/blueray/edit/{{ $b->kodeblueray }}">
                        <button type="button" class="btn btn-info">Edit</button>
                    </a>
                    <a href="/blueray/hapus/{{ $b->kodeblueray }}">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    {{  $blueray->links() }}

@endsection
