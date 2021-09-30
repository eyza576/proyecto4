<!-- Idpaciente Field -->
<div class="col-sm-4">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    <p>{{ $citas->idpaciente }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $citas->fecha }}</p>
</div>

<!-- Iddoctor Field -->
<div class="col-sm-4">
    {!! Form::label('iddoctor', 'Iddoctor:') !!}
    <p>{{ $citas->iddoctor }}</p>
</div>

