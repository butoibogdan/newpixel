@extends('administrare.dashboard')

@section('numerefacturi')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h1>Adaugare -  Numeredocumente</h1>
                    <hr/>
                    {!! Form::open(['url' => 'admin/doc_number']) !!}
                    <div class="form-group">
                        {!! Form::label('tipdocument','tipdocumet: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::select('tipdocument',Config::get('newpixel.tipuri_documente'),null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('seriedocument', 'Seriefactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('seriedocument', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('numar_min', 'Numarfactura_min: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar_min', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('numar_max', 'Numarfactura_max: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar_max', null, ['class' => 'form-control']) !!}
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
