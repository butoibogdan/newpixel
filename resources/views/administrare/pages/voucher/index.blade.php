@extends('administrare.dashboard')

@section('voucher')

<div class="table">
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>SL.</th><th>Numar</th><th>Actions</th>
        </tr>
        {{-- */$x=0;/* --}}
        @foreach($vouchers as $item)
        {{-- */$x++;/* --}}
        <tr>
            <td>{{ $x }}</td>
            <td>
                <a href="{{ url('admin/voucher', $item->id) }}">{{ $item->numar }}</a>
            </td>
            <td>
                <a href="{{ url('admin/voucher/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                <a href="{{ url('admin/voucher/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" align="center">
                <div class="pagination"> {!! str_replace('/?', '?', $vouchers->render()) !!} </div>
            </td>
        </tr>
    </table>
</div>

@endsection
