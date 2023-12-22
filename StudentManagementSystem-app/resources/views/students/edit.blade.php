@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Öğrenci Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('students/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id"></br>
                <label>Ad Soyad</label></br>
                <input type="text" name="adSoyad" id="adSoyad" value="{{ $students->adSoyad }}" class="form-control"></br>
                <label>Adres</label></br>
                <input type="text" name="adres" id="adres" value="{{ $students->adres }}" class="form-control"></br>
                <label>Telefon</label></br>
                <input type="text" name="telefon" id="telefon" value="{{ $students->telefon }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop