@extends({!! Config::newpixel('master_layouts') !!})

@section('facturiproduse')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Adaugare -  Facturiproduse</h1>
                    <hr/>
                    {!! Form::open(['url' => 'facturiproduse']) !!}
                    <div class="form-group">
                        {!! Form::label('idfactura', 'Idfactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idfactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('denumireprodus', 'Denumireprodus: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('denumireprodus', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('cantitateprodus', 'Cantitateprodus: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('cantitateprodus', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('valoareprodus', 'Valoareprodus: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('valoareprodus', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('cotatva', 'Cotatva: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('cotatva', null, ['class' => 'form-control']) !!}
                    </div>
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
