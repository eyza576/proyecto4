<!-- Apellido Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('apellido_nombre', 'Apellido Nombre:') !!}
    <p>{{ $paciente->apellido_nombre }}</p>
</div>

<!-- Dni Field -->
<div class="col-sm-12">
    {!! Form::label('dni', 'Dni:') !!}
    <p>{{ $paciente->dni }}</p>
</div>

<!-- Celular Field -->
<div class="col-sm-12">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{{ $paciente->celular }}</p>
</div>

