@extends({!!Config::newpixel('master_layouts')!!})

@section('clientipj')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit Clientipj</h1>
                    <hr/>

                    {!! Form::model($clientipj, ['method' => 'PATCH', 'action' => ['{!!Config::newpixel('controller_link')!!}ClientipjController@update', $clientipj->id], 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('nume', 'Nume: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('cif', 'Cif: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('cif', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('cui', 'Cui: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('cui', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('adresa', 'Adresa: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('adresa', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('iban', 'Iban: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('iban', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('banca', 'Banca: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('banca', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('email', 'Email: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('telefon', 'Telefon: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('telefon', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('reprezentant', 'Reprezentant: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('reprezentant', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('observatii', 'Observatii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::textarea('observatii', null, ['class' => 'form-control','id'=>'editorck_observatii']) !!}
                        <script>CKEDITOR.replace('editorck_observatii');</script>
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
