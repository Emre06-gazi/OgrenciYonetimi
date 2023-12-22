@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Kayıt Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Kayıt No: {{ $enrollments->kayitNo }}</h5>
                <p class="card-text">Sınav Id: {{ $enrollments->sinavId }}</p>
                <p class="card-text">Öğrenci Id: {{ $enrollments->ogrenciId }}</p>
                <p class="card-text">Katılma Tarihi: {{ $enrollments->katilmaTarihi }}</p>
                <p class="card-text">Fiyat: {{ $enrollments->ücret }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection