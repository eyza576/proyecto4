<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
            <tr>
            
                <th>Idpaciente</th>
        <th>Fecha</th>
        <th>Iddoctor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $citas)
            <tr>
                <td>{{ $citas->idpaciente }}</td>
            <td>{{ $citas->fecha }}</td>
            <td>{{ $citas->iddoctor }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citas.destroy', $citas->idcitas], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$citas->idcitas]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citas.edit', [$citas->idcitas]) }}" class='btn btn-default btn-xs'>
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
