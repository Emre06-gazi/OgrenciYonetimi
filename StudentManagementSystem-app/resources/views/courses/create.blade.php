@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Ders Ekleme Sayfası</div>
        <div class="card-body">
            <form action="{{ url('courses') }}" method="post">
                {!! csrf_field() !!}
                <label>Ders Adı</label></br>
                <input type="text" name="dersAdi" id="dersAdi" class="form-control"></br>
                <label>Müfredat</label></br>
                <input type="text" name="müfredat" id="müfredat" class="form-control"></br>
                <label>Süre</label></br>
                <input type="text" name="süre" id="süre" class="form-control"></br>
                <input type="submit" value="Ekle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop