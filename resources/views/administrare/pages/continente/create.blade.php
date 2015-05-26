@extends('administrare.dashboard_body')

@section('continente')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Create a new continente</h1>
                        <hr/>

                        {!! Form::open(['url' => 'admin/continente']) !!}
                        
                        <div class="form-group">
                        {!! Form::label('Denumire', 'Denumire: ') !!}
                        {!! Form::text('Denumire', null, ['class' => 'form-control']) !!}
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