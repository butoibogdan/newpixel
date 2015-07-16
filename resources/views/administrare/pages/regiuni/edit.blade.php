@extends('administrare.dashboard')

@section('regiuni')
{!! Breadcrumbs::render('editreg',$regiuni) !!}
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit regiuni</h1>
                    <hr/>

                    {!! Form::model($regiuni, ['method' => 'PATCH', 'action' => ['AdminController\Pages\RegiuniController@update', $regiuni->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('TaraID', 'Taraid: ') !!}
                        {!! Form::select('TaraID',$tara_select+$listatari,null, ['id'=>'select_tara','class' => 'form-control']) !!}
                    </div>
                    <script>
                            $("#select_tara").select2({
                                placeholder: "Alege continent",
                                width: "100%"
                            });
                        </script>
                    <div class="form-group">
                        {!! Form::label('nume', 'Nume: ') !!}
                        {!! Form::text('nume', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('descriere', 'Descriere: ') !!}
                        {!! Form::text('descriere', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('Latitudine', 'Latitudine: ') !!}
                        {!! Form::text('Latitudine', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('Longitudine', 'Longitudine: ') !!}
                        {!! Form::text('Longitudine', null, ['class' => 'form-control']) !!}
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