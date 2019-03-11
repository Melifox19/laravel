<table class="table table-responsive" id="mesures-table">
    <thead>
        <tr>
            <th>Horodatagemesure</th>
        <th>Temperature</th>
        <th>Humidite</th>
        <th>Niveaubatterie</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Debitsonore</th>
        <th>Idruche</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mesures as $mesure)
        <tr>
            <td>{!! $mesure->horodatageMesure !!}</td>
            <td>{!! $mesure->temperature !!}</td>
            <td>{!! $mesure->humidite !!}</td>
            <td>{!! $mesure->niveauBatterie !!}</td>
            <td>{!! $mesure->longitude !!}</td>
            <td>{!! $mesure->latitude !!}</td>
            <td>{!! $mesure->debitSonore !!}</td>
            <td>{!! $mesure->idRuche !!}</td>
            <td>
                {!! Form::open(['route' => ['mesures.destroy', $mesure->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mesures.show', [$mesure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mesures.edit', [$mesure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>