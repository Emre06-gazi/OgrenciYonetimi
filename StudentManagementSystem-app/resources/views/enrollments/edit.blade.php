@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Kayıt Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('enrollments/' . $enrollments->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}" id="id"></br>
                <label>Kayıt No</label></br>
                <input type="text" name="kayitNo" id="kayitNo" value="{{ $enrollments->kayitNo }}" id="id" class="form-control"></br>
                <label>Sınav Id</label></br>
                <input type="text" name="sinavId" id="sinavId" value="{{ $enrollments->sinavId }}" id="id" class="form-control"></br>
                <label>Öğrenci Id</label></br>
                <input type="text" name="ogrenciId" id="ogrenciId" value="{{ $enrollments->ogrenciId }}" class="form-control"></br>
                <label>Katılma Tarihi</label></br>
                <input type="text" name="katilmaTarihi" id="katilmaTarihi" value="{{ $enrollments->katilmaTarihi }}" class="form-control"></br>
                <label>Fiyat</label></br>
                <input type="text" name="ücret" id="ücret" value="{{ $enrollments->ücret }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop