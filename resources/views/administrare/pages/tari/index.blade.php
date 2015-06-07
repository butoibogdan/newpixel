@extends('administrare.dashboard_body')

@section('tari')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Administrare tari</div>

                    <div class="panel-body">
                        <h1>Tari</h1>
                        <a href="{{ url('admin/tari/create') }}" class="btn btn-primary pull-right">Adauga tara</a>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nr.</th>
                                    <th>Denumire</th>
                                    <th>Actiuni</th>
                                </tr>
                                {{-- */$x=0;/* --}}
                                @foreach($taris as $item)
                                    {{-- */$x++;/* --}}
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td><a href="{{ url('admin/tari', $item->id) }}">{{ $item->nume }}</a></td>
                                        <td><a href="{{ url('admin/tari/edit/'.$item->id) }}">Edit</a> / <a href="{{ url('admin/tari/destroy/'.$item->id) }}">Delete</a> </td>
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