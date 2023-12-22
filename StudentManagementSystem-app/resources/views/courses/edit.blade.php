@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Ders Güncelleme Sayfası</div>
        <div class="card-body"> 
            <form action="{{ url('courses/' . $courses->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $courses->id }}" id="id"></br>
                <label>Ders Adı</label></br>
                <input type="text" name="dersAdi" id="dersAdi" value="{{ $courses->dersAdi }}" class="form-control"></br>
                <label>Müfredat</label></br>
                <input type="text" name="müfredat" id="müfredat" value="{{ $courses->müfredat }}" class="form-control"></br>
                <label>Süre</label></br>
                <input type="text" name="süre" id="süre" value="{{ $courses->süre }}" class="form-control"></br>
                <input type="submit" value="Güncelle" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop