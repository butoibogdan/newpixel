@extends('administrare.dashboard_body')

@section('voucher')

    <h1>Vouchers <a href="{{ url('/voucher/create') }}" class="btn btn-primary pull-right btn-sm">Add New Voucher</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($vouchers as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('/voucher', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/voucher/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                        <a href="{{ url('/voucher/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
