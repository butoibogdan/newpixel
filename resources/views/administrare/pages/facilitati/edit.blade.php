@extends('administrare.dashboard')

@section('facilitati')

    <h1>Edit Facilitati</h1>
    <hr/>

    {!! Form::model($facilitati, ['method' => 'PATCH', 'action' => ['AdminController\Pages\FacilitatiController@update', $facilitati->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('facilitati', 'Facilitati: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('facilitati', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
