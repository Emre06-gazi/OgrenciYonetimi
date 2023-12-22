@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Ödeme Sayfası Detay</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Kayıt Id: {{ $payments->kayitId }}</h5>
                <p class="card-text">Ödeme Tarihi: {{ $payments->ödemeTarihi }}</p>
                <p class="card-text">Miktar: {{ $payments->miktar }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection