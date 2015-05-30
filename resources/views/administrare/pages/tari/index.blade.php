@extends('administrare.dashboard_body')

@section('tari')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    
                    <div class="panel-body">
                        <h1>taris</h1>
                        <h2><a href="{{ url('admin/tari/create') }}">Create</a></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>SL.</th>
                                    <th>Nume</th>
                                    <th>Actions</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($taris as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/tari', $item->id) }}">{{ $item->nume }}</a></td>
                                        <td><a href="{{ url('admin/tari/'.$item->id.'/edit') }}">Edit</a> / <a href="{{ url('admin/tari/destroy/'.$item->id) }}">Delete</a> </td>
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