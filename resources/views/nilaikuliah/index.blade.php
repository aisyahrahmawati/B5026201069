@extends('layout.ceria')
@section('title', 'Database Nilai Kuliah')

<style>
    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .tambah {
        margin-left: 920px;
        color: rgb(0, 0, 0);
    }

    #nilaikuliah {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 70%;
        text-align: center;
        margin-left: 250px;
        border-collapse: collapse;
    }

    #nilaikuliah td,
    #nilaikuliah th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }

    #nilaikuliah tr:nth-child(even) {
        background-color: #c7baaa;
    }

    #nilaikuliah tr:hover {
        background-color: #dddddd;
    }

    #nilaikuliah th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #fdfdfd;
        color: black;
    }

</style>

@section('isikonten')

    <h2>Database Nilai Kuliah</h2>
    <div class="tambah">
        <button type="button" class="btn btn-warning">
            <a href="/nilaikuliah/tambah"> + Tambah Nilai Baru</a>
        </button>
    </div>

{{-- <div class="container" style="margin-left: 300px; margin-bottom: 20px; margin-top: 20px">
	<form action="/blueray/cari" method="GET">
		<input class="form-control col-md-8" type="text" name="cari" placeholder="Cari Blueray.." value="{{ old('cari') }}">
		<input class="form-control col-md-8 btn-success" type="submit" value="Cari">
	</form>
</div> --}}

    <table id="nilaikuliah" border="1">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    <?php
                        if($n->NilaiAngka <=40){
                            echo "D";
                        } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                            echo "C";
                        } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                            echo "B";
                        } else{
                            echo "A";
                        }
                        ?>
                </td>
                <td>
                    <?php
                        $bobot = $n->NilaiAngka * $n->SKS;
                        echo $bobot;
                        ?>
                </td>
            </tr>
        @endforeach
    </table>

    {{  $nilaikuliah->links() }}

@endsection
