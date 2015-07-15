@extends('administrare.dashboard_body')

@section('voucher')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Edit Voucher</h1>
                    <hr/>

                    {!! Form::model($voucher, ['method' => 'PATCH', 'action' => ['{!!Config::newpixel('controller_link')!!}VoucherController@update', $voucher->id], 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('idfactura', 'Idfactura: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('idfactura', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('numar', 'Numar: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('numar', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('data', 'Data: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('data', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('adulti', 'Adulti: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('adulti', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('copii', 'Copii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('copii', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('datanasteriicopii', 'Datanasteriicopii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('datanasteriicopii', null, ['class' => 'form-control']) !!}
                    </div><div class="form-group">
                        {!! Form::label('alteservicii', 'Alteservicii: ', ['class' => 'col-md-12 control-label']) !!}
                        {!! Form::text('alteservicii', null, ['class' => 'form-control']) !!}
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
