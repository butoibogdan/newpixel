@extends('administrare.dashboard')

@section('hoteluri')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>hoteluris</h1>
                        <h2><a href="{{ url('admin/hoteluri/create') }}">Adauga</a></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nr.</th><th>Name</th><th>Actions</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($hoteluris as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/hoteluri', $item->id) }}">{{ $item->name }}</a></td>
                                        <td><a href="{{ url('admin/hoteluri/edit/'.$item->id) }}">Edit</a> / <a href="{{ url('admin/hoteluri/destroy/'.$item->id) }}">Delete</a></td>
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