@extends('administrare.dashboard')

@section('clienti')

    <h1>Clientis <a href="{{ url('admin/clienti/create') }}" class="btn btn-primary pull-right btn-sm">Add New Clienti</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($clientis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('/clienti', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/clienti/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>
                        <a href="{{ url('admin/clienti/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
