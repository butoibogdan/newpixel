@extends('administrare.dashboard_body')

@section('facturi')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Facturi</h1>
                    <hr/>
                    {!! Form::open(['url' => 'facturi']) !!}

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date client</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::text('idclient', null, ['placeholder'=>'Client','class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Date Factura</h3>
                                <div class="box-body">
                                    <div class="form-group">
                                        {!! Form::text('tipfactura', null, ['placeholder'=>'Tip Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('seriefactura', null, ['placeholder'=>'Serie Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('numarfactura', null, ['placeholder'=>'Numar Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('datafactura', null, ['placeholder'=>'Data Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('valoarefactura_ftva', null, ['placeholder'=>'Valoare Factura','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('valoare_tva', null, ['placeholder'=>'Valoare TVA','class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('incasare', null, ['placeholder'=>'Incasare','class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('administrare.invoicetpl')
                    <br/><br/>
                    <div class="form-group">
                        {!! Form::submit('Adauga', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection
