@extends('administrare.dashboard')

@section('regiuni')
{!! Breadcrumbs::render('regiuni') !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>regiunis</h1>
                        <h2><a href="{{ url('admin/regiuni/create') }}">Adauga</a></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nr.</th><th>Name</th><th>Actions</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($regiunis as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/regiuni', $item->id) }}">{{ $item->nume }}</a></td>
                                        <td><a href="{{ url('admin/regiuni/edit/'.$item->id) }}">Edit</a> / <a href="{{ url('admin/regiuni/destroy/'.$item->id) }}">Delete</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection