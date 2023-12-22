@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Ödeme Listesi</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/payments/create/')}}" class="btn btn-success btn-sm" title="Add New Payment">
            <i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kayıt Id</th>
                        <th>Ödeme Tarihi</th>
                        <th>Miktar</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($payments as $item)
                    <tr>
                        <td> {{ $loop->iteration }} </td>  
                        <td> {{ $item->kayitId }} </td>  
                        <td> {{ $item->ödemeTarihi }} </td>  
                        <td> {{ $item->miktar }} </td>  
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" title="View Payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Detay</button></a>
                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Güncelle</button></a>
                            <form method="post" action="{{ url('/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Silmek istediğinize emin misiniz?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Sil</button>
                            </form>
                            <a href="{{ url('/report/report1/' . $item->id) }}" title="Edit Payment"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Yazdır</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection