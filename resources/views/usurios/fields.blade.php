<!-- Apellido Field -->
<div class="form-group col-sm-3">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Usurio Field -->
<div class="form-group col-sm-3">
    {!! Form::label('usurio', 'Usurio:') !!}
    {!! Form::text('usurio', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-2">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>