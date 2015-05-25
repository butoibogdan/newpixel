@extends('administrare.dashboard_body')

@section('continente')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    
                    <div class="panel-body">
                        <h1>Continente</h1>
                        <h2><a href="{{ url('/continente/create') }}">Create</a></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>SL.</th><th>Denumire</th><th>Actions</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($continentes as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td><td><a href="{{ url('/continente', $item->id) }}">{{ $item->Denumire }}</a></td><td><a href="{{ url('/continente/'.$item->id.'/edit') }}">Edit</a> / <a href="{{ url('/continente/destroy/'.$item->id) }}">Delete</a> </td>
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