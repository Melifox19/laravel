<table class="table table-responsive" id="mesures-table">
    <thead>
        <tr>
        <th>Date & heure</th>
        <th>Masse</th>
        <th>Température intérieure</th>
        <th>Température extérieure</th>
        <th>Taux d'humidité intérieure</th>
        <th>Taux d'humidité extérieure</th>
        <th>Pression</th>
        <th>Niveau de batterie</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Debit sonore 200Hz</th>
        <th>Debit sonore 400Hz</th>
        <th>ID Ruche</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mesures as $mesure)
        <tr>
            <td>{!! $mesure->horodatageMesure !!}</td>
            <td>{!! $mesure->masse !!}</td>
            <td>{!! $mesure->temperatureInt !!}</td>
            <td>{!! $mesure->temperatureExt !!}</td>
            <td>{!! $mesure->humiditeInt !!}</td>
            <td>{!! $mesure->humiditeExt !!}</td>
            <td>{!! $mesure->pression !!}</td>
            <td>{!! $mesure->niveauBatterie !!}</td>
            <td>{!! $mesure->longitude !!}</td>
            <td>{!! $mesure->latitude !!}</td>
            <td>{!! $mesure->debitSonore200 !!}</td>
            <td>{!! $mesure->debitSonore400 !!}</td>
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
