@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Sınav Listesi</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/batches/create/')}}" class="btn btn-success btn-sm" title="Add New Batch">
            <i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sınav Adı</th>
                        <th>Ders Id</th>
                        <th>Başlangıç Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($batches as $item)
                    <tr>
                        <td> {{ $loop->iteration }} </td>  
                        <td> {{ $item->sinavAdi }} </td>  
                        <td> {{ $item->dersId}} </td>  
                        <td> {{ $item->baslangicTarihi }} </td>  
                        <td>
                            <a href="{{ url('/batches/' . $item->id) }}" title="View Batch"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Detay</button></a>
                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Batch"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Güncelle</button></a>
                            <form method="post" action="{{ url('/batches' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm(&quot;Silmek istediğinize emin misiniz?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection