@extends('administrare.dashboard')

@section('tari')
    <div class="content">

        <div class="box box-default color-palette-box">
            <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: tari :: {{$tari->nume}}</h3> </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/tari/create') }}" class="btn btn-app" title="Adauga"> <i class="fa fa-edit"></i> Adauga </a>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th class="col-sm-1">Nr.</th>
                                    <th class="col-sm-11">Denumire</th>
                                </tr>
                                <tr>
                                    <td>{{ $tari->id }}</td><td>{{ $tari->nume }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="form-group">
                    <div class="col-md-2 col-xs-offset-10"><a href = "{{URL::previous()}}" class = 'btn btn-block btn-default btn-sm'>Inapoi la lista</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection