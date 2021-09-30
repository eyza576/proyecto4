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

<!-- Especialidad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>