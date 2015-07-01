@extends('administrare.dashboard_body')

@section('facturi')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit Facturi</h1>
                    <hr/>

                    {!! Form::model($facturi, ['method' => 'PATCH', 'action' => ['{!!Config::newpixel('controller_link')!!}FacturiController@update', $facturi->id], 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('idclient', 'Idclient: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idclient', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('tipfactura', 'Tipfactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('tipfactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('seriefactura', 'Seriefactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('seriefactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('numarfactura', 'Numarfactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numarfactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('datafactura', 'Datafactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('datafactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('valoarefactura_ftva', 'Valoarefactura Ftva: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('valoarefactura_ftva', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('valoare_tva', 'Valoare Tva: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('valoare_tva', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('incasare', 'Incasare: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('incasare', null, ['class' => 'form-control']) !!}
                    </div>
    
                        <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}

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
    </div>
</div>
@endsection
