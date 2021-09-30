<div class="table-responsive">
    <table class="table" id="usurios-table">
        <thead>
            <tr>
            
                <th>Apellido</th>
        <th>Nombre</th>
        <th>Usurio</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usurios as $usurio)
            <tr>
                <td>{{ $usurio->apellido }}</td>
            <td>{{ $usurio->nombre }}</td>
            <td>{{ $usurio->usurio }}</td>
            <td>{{ $usurio->password }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['usurios.destroy', $usurio->idusurio], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usurios.show', [$usurio->idusurio]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('usurios.edit', [$usurio->idusurio]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
