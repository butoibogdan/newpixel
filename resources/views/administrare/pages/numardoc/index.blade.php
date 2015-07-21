@extends('administrare.dashboard')

@section('numerefacturi')

    <h1>Numerefacturis <a href="{{ url('admin/doc_number/create') }}" class="btn btn-primary pull-right btn-sm">Add New Numerefacturi</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($numerefacturis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('admin/doc_number', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/doc_number/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                        <a href="{{ url('admin/doc_number/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
