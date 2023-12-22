@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Ödeme Ekleme Sayfası</div>
        <div class="card-body">
            <form action="{{ url('payments') }}" method="post">
                {!! csrf_field() !!}
                <label>Kayıt Numarası</label></br>
                <select name="kayitId" id="kayitId" class="form-control">
                    @foreach($enrollment as $id => $kayitNo)
                    <option value="{{ $id }}">{{ $kayitNo }}</option>
                    @endforeach
                </select></br>
                <label>Ödeme Tarihi</label></br>
                <input type="text" name="ödemeTarihi" id="ödemeTarihi" class="form-control"></br>
                <label>Miktar</label></br>
                <input type="text" name="miktar" id="miktar" class="form-control"></br>
                <input type="submit" value="Ekle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop