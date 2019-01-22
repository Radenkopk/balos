@extends('admin.layouts.app')
@section('content')



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/hotels">Hoteli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Obrisani</li>
        </ol>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class=" search input-admin">

                        <label for="search"></label>
                        <input type="text" class="form-control "   id="search" placeholder="Pretraži">
                        <button type="submit" class="btn btn-primary" <i class="fas fa-search"></i> Pretraži</button>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h4 class="title">OBRISANI HOTELI</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>NASLOV</th>
                                <th>PODNASLOV</th>
                                <th>GRAD</th>
                                <th>VREME BRISANJA</th>
                                <th>STATUS</th>
                                <th> <span class="pull-right">IZMENI/OBRIŠI</span></th>
                                </thead>
                                <tbody>
                                @foreach($allDeleted as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->subtitle}}</td>
                                        <td>@if($data->City){{$data->City->title}} @endif</td>
                                        <td>{{$data->deleted_at}}</td>
                                        <td>
                                            @if($data->active == 1)  Aktivno <i class="fas fa-thumbs-up"></i>
                                            @else <strong class="text-danger">Nije aktivno</strong>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="pull-right">
                                                <a  type="button" href="/admin/hotels/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> IZMENI</a>
                                                <form class="d-inline" method="POST" action="/admin/hotels/{{$data->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btnDelete"><i class="fas fa-trash-alt"></i> OBRIŠI</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            {{$allDeleted->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection