@extends('administrare.dashboard')

@section('tari')
    <div class="content">

        <div class="box box-default color-palette-box">
            <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: tari</h3> </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/tari/create') }}" class="btn btn-app" title="Adauga"> <i class="fa fa-edit"></i> Adauga </a>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th class="col-sm-1">Nr.</th>
                                    <th class="col-sm-9">Denumire</th>
                                    <th class="col-sm-2 text-right">Actiuni</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($taris as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td>
                                            <a href="{{ url('admin/tari', $item->id) }}">{{ $item->nume }}</a>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ url('admin/tari/edit/'.$item->id) }}" class="btn btn-primary btn-xs" title="Modifica">Modifica</a>
                                            <a href="{{ url('admin/tari/destroy/'.$item->id) }}" class="btn btn-danger btn-xs" title="Modifica">Sterge</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection