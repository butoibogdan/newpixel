@extends('administrare.dashboard_body')

@section('tari')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Create a new tari</h1>
                    <hr/>

                    {!! Form::open(['url' => 'tari','files'=>'true']) !!}

                    <div class="form-group">
                        {!! Form::label('ContinentID', 'Continentid: ') !!}
                        {!! Form::text('ContinentID', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('nume', 'Nume: ') !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('descriere', 'Descriere: ') !!}
                        {!! Form::text('descriere', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!!Form::label('poza', 'Poza: ')!!}
                        {!! Form::file('poza',['id'=>'input-1','class' => 'file']) !!}
                      
                    </div><div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('Longitudine', 'Longitudine: ') !!}
                        {!! Form::text('Longitudine', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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