@extends('administrare.dashboard')

@section('facturi')
<div class="container">
    <h1>Facturis <a href="{{ url('admin/facturi/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facturi</a></h1>
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
                        @if(statusfactura($item->id)==0)
                            <a href="{{ url('admin/facturi/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>
                            <a href="{{ url('admin/facturi/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
                            <a href="{{ url('admin/facturi/pdf/'.$item->id) }}"><button type="submit" class="btn btn-info btn-xs">PDF</button></a>
                                @if(voucheremis($item->id)=="")
                                <a href="{{ url('admin/voucher/create/'.$item->id) }}"><button type="submit" class="btn btn-info btn-xs">Voucher</button></a>
                                @elseif((voucheremis($item->id)!=""))
                                <a href="{{ url('admin/voucher/edit/'.voucheremis($item->id)) }}"><button type="submit" class="btn btn-success btn-xs">{{numarvoucher($item->id)}}</button></a>
                                @endif
                        @elseif(statusfactura($item->id)==1)
                            <a href="{{ url('admin/facturi/stornare/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Stornare</button></a>
                            <a href="{{ url('admin/facturi/anulare/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Anulare</button></a>
                            <a href="{{ url('admin/facturi/pdf/'.$item->id) }}"><button type="submit" class="btn btn-info btn-xs">{{$item->seriefactura}}|{{$item->numarfactura}}</button></a>
                                @if(voucheremis($item->id)=="")
                                <a href="{{ url('admin/voucher/create/'.$item->id) }}"><button type="submit" class="btn btn-info btn-xs">Voucher</button></a>
                                @elseif((voucheremis($item->id)!=""))
                                <a href="{{ url('admin/voucher/edit/'.voucheremis($item->id)) }}"><button type="submit" class="btn btn-success btn-xs">{{numarvoucher($item->id)}}</button></a>
                                @endif
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
