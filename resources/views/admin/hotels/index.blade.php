@extends('admin.layouts.app')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hoteli</li>
        </ol>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <form action="/admin/hotels" method="get">
                        <div class=" search input-admin">
                            <label for="search"></label>
                            <input type="text" class="form-control " name="keyword"   id="search" placeholder="Pretraži">
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Pretraži</button>
                        </div>
                    </form>
                    <h4> Ukupno imate <span class="number">0</span> Hotela </h4>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">HOTELI</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>NASLOV</th>
                                <th>SLIKE</th>
                                <th>GRAD</th>
                                <th>NASLOVNA STRANA</th>
                                <th>STATUS</th>
                                <th> <span class="pull-right">IZMENI/OBRIŠI</span></th>
                                </thead>
                                <tbody>
                                @foreach($allData as $data)
                                    <tr class="counter">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>
                                            <a href="/admin/hotels/{{$data->id}}/images-hotels" class="btn btn-warning">
                                                <i class="fas fa-images"></i> SLIKE
                                            </a>
                                        </td>
                                        <td>@if($data->City){{$data->City->title}} @endif</td>
                                        <td>
                                            @if($data->home == 1) <strong>DA</strong>
                                            @else <span class="text-danger">NE</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data->active == 1)  Aktivno <i class="fas fa-thumbs-up"></i>
                                            @else <strong class="text-danger">Nije aktivno</strong>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="pull-right">
                                                <a  type="button" href="/admin/hotels/{{$data->id}}/edit" class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt"></i> IZMENI
                                                </a>
                                                <form class="d-inline" method="POST" action="/admin/hotels/{{$data->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-delete-hotel"><i class="fas fa-trash-alt"></i> OBRIŠI</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            {{$allData->links()}}
                        </div>
                        <div class="btn-add">
                            <a class="btn btn-success pull-right btn-lg" href="/admin/hotels/create" role="button">
                                <i class="fas fa-plus-circle"></i> DODAJTE NOVI HOTEL
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-danger btn-lg" href="/admin/hotels/deleted" role="button">
                        <i class="fas fa-trash-alt"></i>  OBRISANI HOTELI
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
