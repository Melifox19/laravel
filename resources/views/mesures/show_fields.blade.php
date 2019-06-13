<!-- Horodatagemesure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horodatageMesure', __('tables.timestamp')) !!}
    <p>{!! $mesure->horodatageMesure !!}</p>
</div>

<!-- Masse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masse', __('tables.mass')) !!}
    <p>{!! $mesure->masse !!}</p>
</div>

<!-- Temperature interieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperatureInt', __('tables.indoor_temp')) !!}
    <p>{!! $mesure->temperatureInt !!}</p>
</div>
<!-- Temperature exterieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperatureExt', __('tables.outdoor_temp')) !!}
    <p>{!! $mesure->temperatureExt !!}</p>
</div>

<!-- Humidite interieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humiditeInt', __('tables.indoor_humi')) !!}
    <p>{!! $mesure->humiditeInt !!}</p>
</div>
@if($ruche->type == 'melilabo')
<!-- Humidite exterieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humiditeExt', __('tables.outdoor_humi')) !!}
    <p>{!! $mesure->humiditeExt !!}</p>
</div>
@endif

<!-- Pression Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pression', __('tables.pressure')) !!}
    <p>{!! $mesure->pression !!}</p>
</div>

<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveauBatterie', __('tables.battery_level')) !!}
    <p>{!! $mesure->niveauBatterie !!}</p>
</div>

@if($ruche->type == 'melilabo')
<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', __('tables.longitude')) !!}
    <p>{!! $mesure->longitude !!}</p>
</div>
<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', __('tables.latitude')) !!}
    <p>{!! $mesure->latitude !!}</p>
</div>

<!-- Debitsonore200 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debitSonore200', __('tables.sound_level200')) !!}
    <p>{!! $mesure->debitSonore200 !!}</p>
</div>
<!-- Debitsonore400 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debitSonore400', __('tables.sound_level400')) !!}
    <p>{!! $mesure->debitSonore400 !!}</p>
</div>
@endif

<!-- Idruche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRuche', __('tables.hive_id')) !!}
    <p>{!! $mesure->idRuche !!}</p>
</div>


<div class="form-group">
  {!! Form::label('actions', 'Aller à la ruche:') !!}
<div class='btn-group'>
  <a href="{!! route('ruches.show', [$mesure->idRuche]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
</div>
{!! Form::close() !!}
</div>
