@extends('administrare.dashboard')

@section('continente')
    <div class="content">

        <div class="box box-success">
            <div class="box-header with-border"> <h3 class="box-title"><i class="fa fa-th"></i> Mapamond :: continente </h3> </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Adauga continent</h4>
                        <hr/>

                        {!! Form::open(['url' => 'admin/continente', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('Denumire', 'Denumire', ['class' => 'col-md-1 control-label']) !!}
                            <div class="col-md-11">{!! Form::text('Denumire', null, ['class' => 'form-control']) !!}</div>
                        </div>

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
            <div class="box-footer">
                        <div class="form-group">
                            <div class="col-md-2 col-xs-offset-8">{!! Form::submit('Adauga', ['class' => 'btn btn-block btn-success btn-sm']) !!}</div>
                            <div class="col-md-2"><a href = "{{URL::previous()}}" class = 'btn btn-block btn-default btn-sm'>Inapoi la lista</a></div>
                        </div>

                        {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection