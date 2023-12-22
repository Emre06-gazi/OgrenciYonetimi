@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Ders Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Ders Adı: {{ $courses->dersAdi }}</h5>
                <p class="card-text">Müfdredat: {{ $courses->müfredat }}</p>
                <p class="card-text">Süre: {{ $courses->süre() }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection