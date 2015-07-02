@extends('administrare.dashboard_body')

@section('facturi')
<div class="container">
    <h1>Facturis <a href="{{ url('/facturi/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facturi</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($facturis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('/facturi', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/facturi/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                        <a href="{{ url('/facturi/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
