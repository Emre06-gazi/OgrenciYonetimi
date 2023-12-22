@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Ödeme Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('payments/' . $payments->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $payments->id }}" id="id"></br>
                <label>Kayıt Id</label></br>
                <input type="text" name="kayitId" id="kayitId" value="{{ $payments->kayitId }}" class="form-control"></br>
                <label>Ödeme Tarihi</label></br>
                <input type="text" name="ödemeTarihi" id="ödemeTarihi" value="{{ $payments->ödemeTarihi }}" class="form-control"></br>
                <label>Miktar</label></br>
                <input type="text" name="miktar" id="miktar" value="{{ $payments->miktar }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop