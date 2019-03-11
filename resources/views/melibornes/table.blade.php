<table class="table table-responsive" id="melibornes-table">
    <thead>
        <tr>
            <th>Niveaubatterie</th>
        <th>Idsigfox</th>
        <th>Idrucher</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($melibornes as $meliborne)
        <tr>
            <td>{!! $meliborne->niveauBatterie !!}</td>
            <td>{!! $meliborne->idSigfox !!}</td>
            <td>{!! $meliborne->idRucher !!}</td>
            <td>
                {!! Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('melibornes.show', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('melibornes.edit', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>