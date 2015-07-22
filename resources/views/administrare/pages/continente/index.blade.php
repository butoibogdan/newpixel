@extends('administrare.dashboard')

@section('continente')
<div class="content">

    <div class="box box-default color-palette-box">
        <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: continente</h3> </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('admin/continente/create') }}" class="btn btn-app" title="Adauga"> <i class="fa fa-edit"></i> Adauga </a>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th class="col-sm-1">Nr.</th>
                                <th class="col-sm-9">Denumire</th>
                                <th class="col-sm-2 text-right">Actiuni</th>
                            </tr>
                            {{-- */$x=0;/* --}}
                            @foreach($continentes as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td>
                                    <a href="{{ url('admin/continente', $item->id) }}">{{ $item->Denumire }}</a>
                                </td>
                                <td class="text-right">
                                    <a href="{{ url('admin/continente/edit/'.$item->id) }}" class="btn btn-primary btn-xs" title="Modifica">Modifica</a>
                                    <a href="{{ url('admin/continente/destroy/'.$item->id) }}" class="btn btn-danger btn-xs" title="Modifica">Sterge</a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" align="center">
                                    <div class="pagination"> {!! str_replace('/?', '?', $continentes->render()) !!} </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection