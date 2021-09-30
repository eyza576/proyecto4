<!-- Apellido Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('apellido_nombre', 'Apellido Nombre:') !!}
    {!! Form::text('apellido_nombre', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-2">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-3">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>