@extends('admin.layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Destinacije</li>
        </ol>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">DESTINACIJE</h4>
                            </h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Naslov</th>
                                <th>Slike</th>
                                <th>Tekst</th>
                                <th>Status</th>
                                <th> <span class="pull-right">IZMENI OBRISI</span> </th>
                                </thead>
                                <tbody>
                                @foreach($allData as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>
                                            <a href="/admin/blog/{{$blog_id}}/destination/{{$data->id}}/images-destinations" class="btn btn-warning">
                                                <i class="fas fa-images"></i> SLIKE
                                            </a>
                                        </td>
                                        <td>{!! substr($data->description, 0, 30) !!}</td>
                                        <td>
                                            @if($data->active == 1) aktivno <i class="fas fa-thumbs-up"></i>
                                            @else <strong class="text-danger">Nije aktivno</strong>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="pull-right">
                                                <a href="/admin/blog/{{$blog_id}}/destination/{{$data->id}}/edit" class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt"></i> IZMENI
                                                </a>
                                                <form class="d-inline" action="/admin/blog/{{$blog_id}}/destination/{{$data->id}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btnDelete">
                                                        <i class="fas fa-trash-alt"></i> OBRIŠI
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- {{$getAll->links()}} --}}
                        <br>
                        <br>
                        <div class="btn-add">
                            <a class="btn btn-success pull-right btn-lg" href="/admin/blog/{{$blog_id}}/destination/create" role="button">
                                <i class="fas fa-plus-circle"></i> DODAJTE NOVU DESTINACIJU
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-danger btn-lg" href="/admin/blog/{{$blog_id}}/destination/deleted" role="button">
                        <i class="fas fa-trash-alt"></i>  OBRISANE DESTINACIJE
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
