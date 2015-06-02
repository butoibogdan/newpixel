@extends('administrare.dashboard_body')

@section('localitati')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Create a new localitati</h1>
                    <hr/>

                    {!! Form::open(['url' => 'admin/localitati','files'=>'true']) !!}

                    <div class="form-group">
                        {!! Form::label('TaraID', 'Taraid: ') !!}
                        {!! Form::text('TaraID', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('RegiuneID', 'Regiuneid: ') !!}
                        {!! Form::text('RegiuneID', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('nume', 'Nume: ') !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tip', 'Tip: ') !!}
                        {!! Form::text('tip', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descriere', 'Descriere: ') !!}
                        {!! Form::textarea('descriere', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('poza', 'Poza: ')!!}
                        {!! Form::file('poza[]',['multiple'=>true, 'id'=>'pozalocalitati','class'=>'file','data-show-upload'=>'false']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
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