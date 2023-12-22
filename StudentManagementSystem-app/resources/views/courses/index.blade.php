@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Ders Listesi</h2>
    </div>
    <div class="card-body">
        <a href="{{url('/courses/create/')}}" class="btn btn-success btn-sm" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ders Adı</th>
                        <th>Müfredat</th>
                        <th>Süre</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($courses as $item)
                    <tr>
                        <td> {{ $loop->iteration }} </td>  
                        <td> {{ $item->dersAdi }} </td>  
                        <td> {{ $item->müfredat }} </td>  
                        <td> {{ $item->süre() }} </td>  
                        <td>
                            <a href="{{ url('/courses/' . $item->id) }}" title="View Course"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Detay</button></a>
                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Güncelle</button></a>
                            <form method="post" action="{{ url('/courses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm(&quot;Silmek istediğinize emin misiniz?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Sil</button>
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