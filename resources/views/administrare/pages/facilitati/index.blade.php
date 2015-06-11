@extends('administrare.dashboard_body')

@section('facilitati')

<h1>Facilitatis
        <a href="{{ url('admin/facilitati/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facilitati</a>
</h1>
<div class="table content" >
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($facilitatis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('admin/facilitati', $item->id) }}">{{ $item->name }}</a></td>
                    <td style="width:8%;">
                        <a href="{{ url('admin/facilitati/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>
                        <a href="{{ url('admin/facilitati/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
