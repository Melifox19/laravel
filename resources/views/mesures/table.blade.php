<table class="table table-responsive" id="mesures-table">
    <thead>
        <tr>
        <th>{{__('tables.timestamp')}}</th>
        <th>{{__('tables.mass')}}</th>
        <th>{{__('tables.indoor_temp')}}</th>
        <th>{{__('tables.outdoor_temp')}}</th>
        <th>{{__('tables.indoor_humi')}}</th>
        <th>{{__('tables.outdoor_humi')}}</th>
        <th>{{__('tables.pressure')}}</th>
        <th>{{__('tables.battery_level')}}</th>
        <th>{{__('tables.longitude')}}</th>
        <th>{{__('tables.latitude')}}</th>
        <th>{{__('tables.sound_level200')}}</th>
        <th>{{__('tables.sound_level400')}}</th>
        <th>{{__('tables.hive_id')}}</th>
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
                  <a href="{!! route('ruches.show', [$mesure->idRucher]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
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
