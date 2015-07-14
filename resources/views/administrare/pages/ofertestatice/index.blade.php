@extends('administrare.dashboard')

@section('oferte')
<div class="container">
    <h1>Ofertestatices <a href="{{ url('admin/oferte/create') }}" class="btn btn-primary pull-right btn-sm">Add New Ofertestatice</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($ofertestatices as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('admin/oferte', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/oferte/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>
                        <a href="{{ url('admin/oferte/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
