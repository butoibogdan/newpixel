@extends('administrare.dashboard')

@section('facturi')

<link href='{{URL::asset("backend/plugins/check/awesome-bootstrap-checkbox.css")}}'></link>
<div class="container">
    <h1>Facturis <a href="{{ url('admin/facturi/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facturi</a></h1>
    <div class="table">
        {!!Form::open(['url'=>'admin/plata/create','method'=>'PUT'])!!}
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th><th>Plata</th><th>Achitat</th>
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
                    <a href="{{ url('admin/facturi/edit/'.$item->id) }}"><div class="btn btn-primary btn-xs">Edit</div></a>
                    <a href="{{ url('admin/facturi/destroy/'.$item->id) }}"><div class="btn btn-danger btn-xs">Delete</div></a>
                    <a href="{{ url('admin/facturi/pdf/'.$item->id) }}"><div class="btn btn-info btn-xs">PDF</div></a>
                        @if(voucheremis($item->id)=="")
                        <a href="{{ url('admin/voucher/create/'.$item->id) }}"><div class="btn btn-info btn-xs">Voucher</div></a>
                        @elseif((voucheremis($item->id)!=""))
                        <a href="{{ url('admin/voucher/edit/'.voucheremis($item->id)) }}"><div class="btn btn-success btn-xs">{{numarvoucher($item->id)}}</div></a>
                        @endif
                    @elseif(statusfactura($item->id)==1)
                    <a href="{{ url('admin/facturi/stornare/'.$item->id) }}"><div class="btn btn-primary btn-xs">Stornare</div></a>
                    <a href="{{ url('admin/facturi/anulare/'.$item->id) }}"><div class="btn btn-danger btn-xs">Anulare</div></a>
                    <a href="{{ url('admin/facturi/pdf/'.$item->id) }}"><div class="btn btn-info btn-xs">{{$item->seriefactura}}|{{$item->numarfactura}}</div></a>
                        @if(voucheremis($item->id)=="")
                        <a href="{{ url('admin/voucher/create/'.$item->id) }}"><div class="btn btn-info btn-xs">Voucher</div></a>
                        @elseif((voucheremis($item->id)!=""))
                        <a href="{{ url('admin/voucher/edit/'.voucheremis($item->id)) }}"><div class="btn btn-success btn-xs">{{numarvoucher($item->id)}}</div></a>
                        @endif
                    @elseif(statusfactura($item->id)==2)
                    <a href="{{ url('admin/facturi/pdf/'.$item->id) }}"><div class="btn btn-danger btn-xs">Anulata|{{$item->seriefactura}}|{{$item->numarfactura}}</div></a>
                    @endif
                </td>
                <td align="left">
                    <label class="cbx-label">
                        @if(statusfactura($item->id)!=2)
                            @if(dateincasare($item->id,'plata')<0 || dateincasare($item->id,'plata')==NULL)
                            {!!Form::checkbox('idfactura['.$item->id.']',$item->id,[],['data-three-state'=>false, 'data-toggle'=>'checkbox-x','data-enclosed-label'=>true])!!}
                            @elseif(dateincasare($item->id,'plata')>=0)
                            Incasat cu: {{dateincasare($item->id,'nrdoc')}}
                            @endif
                        @endif
                    </label>

                </td>
                <td>
                    <div class="progress" style="border:1px solid #999999; ">
                         @if(dateincasare($item->id,'plata')>0)
                        <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                            100%
                        </div>
                         @else
                         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:{{procentplata($item->id)}}%;color: #990000;">
                            {{procentplata($item->id)}}%
                        </div>
                         @endif
                    </div>
                </td>
            </tr>
            @endforeach
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{!!Form::submit('Plateste',["class"=>"btn btn-primary btn-sm"])!!}</td>
                    <td></td>
                </tr>
            </tfoot>
            
        </table>
        {!!Form::close()!!}
    </div>
</div>

@endsection
