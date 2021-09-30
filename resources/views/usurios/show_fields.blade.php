<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $usurio->apellido }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $usurio->nombre }}</p>
</div>

<!-- Usurio Field -->
<div class="col-sm-12">
    {!! Form::label('usurio', 'Usurio:') !!}
    <p>{{ $usurio->usurio }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $usurio->password }}</p>
</div>

