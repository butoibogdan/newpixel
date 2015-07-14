@extends('administrare.dashboard_body')

@section('continente')
    <div class="content">

        <div class="box box-primary">
            <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: continente </h3> </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Modifica continent</h4>
                        <hr/>

                        {!! Form::model($continente, array('method' => 'PATCH', 'action' => array('AdminController\Pages\ContinenteController@update', $continente->id))) !!}

                        <div class="form-group">
                            {!! Form::label('Denumire', 'Denumire', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-10">{!! Form::text('Denumire', null, ['class' => 'form-control']) !!}</div>
                        </div>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box-footer">
                        <div class="form-group">
                            <div class="col-md-2 col-xs-offset-8">{!! Form::submit('Modifica', ['class' => 'btn btn-block btn-primary btn-sm']) !!}</div>
                            <div class="col-md-2"><a href = "{{URL::previous()}}" class = 'btn btn-block btn-default btn-sm'>Inapoi la lista</a></div>
                        </div>

                        {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection