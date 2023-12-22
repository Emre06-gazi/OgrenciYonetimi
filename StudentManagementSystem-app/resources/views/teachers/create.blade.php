@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Öğretmen Ekleme Sayfası</div>
        <div class="card-body">
            <form action="{{ url('teachers') }}" method="post">
                {!! csrf_field() !!}
                <label>Ad Soyad</label></br>
                <input type="text" name="adSoyad" id="adSoyad" class="form-control"></br>
                <label>Adres</label></br>
                <input type="text" name="adres" id="adres" class="form-control"></br>
                <label>Telefon</label></br>
                <input type="text" name="telefon" id="telefon" class="form-control"></br>
                <input type="submit" value="Ekle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop