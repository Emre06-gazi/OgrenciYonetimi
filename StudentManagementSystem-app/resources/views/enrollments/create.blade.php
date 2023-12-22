@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Kayıt Ekleme Sayfası</div>
        <div class="card-body">
            <form action="{{ url('enrollments') }}" method="post">
                {!! csrf_field() !!}
                <label>Kayıt No</label></br>
                <input type="text" name="kayitNo" id="kayitNo" class="form-control"></br>
                <label>Sınav Id</label></br>
                <input type="text" name="sinavId" id="sinavId" class="form-control"></br>
                <label>Ogrenci Id</label></br>
                <input type="text" name="ogrenciId" id="ogrenciId" class="form-control"></br>
                <label>Katılma Tarihi</label></br>
                <input type="text" name="katilmaTarihi" id="katilmaTarihi" class="form-control"></br>
                <label>Ücret</label></br>
                <input type="text" name="ücret" id="ücret" class="form-control"></br>
                <input type="submit" value="Ekle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop