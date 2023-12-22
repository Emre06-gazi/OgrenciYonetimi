@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Öğrenci Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Ad Soyad: {{ $students->adSoyad }}</h5>
                <p class="card-text">Adres: {{ $students->adres }}</p>
                <p class="card-text">Telefon: {{ $students->telefon }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection