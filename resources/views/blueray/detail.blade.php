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

@section('title', 'Detail Database Blueray')
@section('isikonten')

    <h3>Detail Data Blueray</h3>
    @foreach($blueray as $b)
    <div class="container">
        <form class="form form-horizontal" action="/blueray/update" method="post">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="hidden" name="id" value="{{ $b->kodeblueray}}">
                        <label class="control-label col-sm-2">Merk</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" name="merk" required="required" value="{{ $b->merkblueray }}">
                    </div>
                    <div class="col-md-4">
                        <label>Stock</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" name="stock" required="required" value="{{ $b->stockblueray }}">
                    </div>
                    <div class="col-md-4">
                        <label>Tersedia{{ $b->tersedia }}</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="radio" id="sedia" name="tersedia" value="Y">
                        <label for="ya">Ya</label><br>
                        <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-warning" type="reset" value="kembali"><a href="/blueray">Kembali</a></button>
                    </div>
                </div>
            </div>
    </div>
    </form>
    @endforeach
@endsection
