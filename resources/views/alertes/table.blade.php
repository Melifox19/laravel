<table class="table table-responsive" id="alertes-table">
    <thead>
        <tr>
            <th>Horodatagealerte</th>
        <th>Type</th>
        <th>Description</th>
        <th>Idruche</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alertes as $alerte)
        <tr>
            <td>{!! $alerte->horodatageAlerte !!}</td>
            <td>{!! $alerte->type !!}</td>
            <td>{!! $alerte->description !!}</td>
            <td>{!! $alerte->idRuche !!}</td>
            <td>
                {!! Form::open(['route' => ['alertes.destroy', $alerte->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alertes.show', [$alerte->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alertes.edit', [$alerte->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>