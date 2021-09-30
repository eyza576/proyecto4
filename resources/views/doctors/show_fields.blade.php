<!-- Apellido Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('apellido_nombre', 'Apellido Nombre:') !!}
    <p>{{ $doctor->apellido_nombre }}</p>
</div>

<!-- Dni Field -->
<div class="col-sm-12">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $doctor->dni }}</p>
</div>

<!-- Especialidad Field -->
<div class="col-sm-12">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{{ $doctor->especialidad }}</p>
</div>

