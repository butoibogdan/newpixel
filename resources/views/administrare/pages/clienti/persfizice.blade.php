<div class="form-group">
    {!! Form::label('nume', 'Nume: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('nume', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('adresa', 'Adresa: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('adresa', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cnp', 'Cnp: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('cnp', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('judet', 'Judet: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('judet', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('oras', 'Oras: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('oras', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('serieci', 'Serieci: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('serieci', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('numarci', 'Numarci: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('numarci', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefon', 'Telefon: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::text('telefon', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('observatii', 'Observatii: ', ['class' => 'col-md-12 control-label']) !!}
    {!! Form::textarea('observatii', null, ['class' => 'form-control','id'=>'editorck_observatii']) !!}
    <script>CKEDITOR.replace('editorck_observatii');</script>
</div>