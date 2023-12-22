@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Sınav Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('batches/' . $batches->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $batches->id }}" id="id"></br>
                <label>Sınav Adı</label></br>
                <input type="text" name="sinavAdi" id="sinavAdi" value="{{ $batches->sinavAdi }}" class="form-control"></br>
                <label>Ders Id</label></br>
                <input type="text" name="dersId" id="dersId" value="{{ $batches->dersId }}" class="form-control"></br>
                <label>Başlangıç Tarihi</label></br>
                <input type="text" name="baslangicTarihi" id="baslangicTarihi" value="{{ $batches->baslangicTarihi }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop