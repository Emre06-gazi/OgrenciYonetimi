@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Öğretmen Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Ad Soyad: {{ $teachers->adSoyad }}</h5>
                <p class="card-text">Adres: {{ $teachers->adres }}</p>
                <p class="card-text">Telefon: {{ $teachers->telefon }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection