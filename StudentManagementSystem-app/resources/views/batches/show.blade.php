@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Sınav Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Sınav Adı: {{ $batches->sinavAdi }}</h5>
                <p class="card-text">Ders Id: {{ $batches->dersId }}</p>
                <p class="card-text">Başlangıç Tarihi: {{ $batches->baslangicTarihi }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection