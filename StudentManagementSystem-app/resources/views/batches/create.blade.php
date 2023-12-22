@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Sınav Ekleme Sayfası</div>
        <div class="card-body">
            <form action="{{ url('batches') }}" method="post">
                {!! csrf_field() !!}
                <label>Sınav Adı</label></br>
                <input type="text" name="sinavAdi" id="sinavAdi" class="form-control"></br>
                <label>Ders Adı</label></br>
                <select name="dersId" id="dersId" class="form-control">
                    @foreach($courses as $id => $dersAdi)
                    <option value="{{ $id }}">{{ $dersAdi }}</option>
                    @endforeach
                </select></br>
                <label>Başlangıç Tarihi</label></br>
                <input type="text" name="baslangicTarihi" id="baslangicTarihi" class="form-control"></br>
                <input type="submit" value="Ekle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop