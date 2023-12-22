@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Öğretmen Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $teachers->id }}" id="id"></br>
                <label>Ad Soyad</label></br>
                <input type="text" name="adSoyad" id="adSoyad" value="{{ $teachers->adSoyad }}" class="form-control"></br>
                <label>Adres</label></br>
                <input type="text" name="adres" id="adres" value="{{ $teachers->adres }}" class="form-control"></br>
                <label>Telefon</label></br>
                <input type="text" name="telefon" id="telefon" value="{{ $teachers->telefon }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop