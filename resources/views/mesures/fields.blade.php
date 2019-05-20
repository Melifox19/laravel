<!-- Horodatagemesure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horodatageMesure', __('tables.timestamp')) !!}
    {!! Form::date('horodatageMesure', null, ['class' => 'form-control']) !!}
</div>

<!-- Masse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masse', __('tables.mass')) !!}
    {!! Form::number('masse', null, ['class' => 'form-control']) !!}
</div>

<!-- Temperature interieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperatureInt', __('tables.indoor_temp')) !!}
    {!! Form::number('temperatureInt', null, ['class' => 'form-control']) !!}
</div>
<!-- Temperature exterieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperatureExt', __('tables.outdoor_temp')) !!}
    {!! Form::number('temperatureExt', null, ['class' => 'form-control']) !!}
</div>

<!-- Humidite interieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humiditeInt', __('tables.indoor_humi')) !!}
    {!! Form::number('humiditeInt', null, ['class' => 'form-control']) !!}
</div>
<!-- Humidite exterieure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humiditeExt', __('tables.outdoor_humi')) !!}
    {!! Form::number('humiditeExt', null, ['class' => 'form-control']) !!}
</div>

<!-- Pression Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pression', __('tables.pressure')) !!}
    {!! Form::number('pression', null, ['class' => 'form-control']) !!}
</div>

<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveauBatterie', __('tables.battery_level')) !!}
    {!! Form::number('niveauBatterie', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', __('tables.longitude')) !!}
    {!! Form::number('longitude', null, ['class' => 'form-control']) !!}
</div>
<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', __('tables.latitude')) !!}
    {!! Form::number('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Debitsonore200 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debitSonore200', __('tables.sound_level200')) !!}
    {!! Form::number('debitSonore200', null, ['class' => 'form-control']) !!}
</div>
<!-- Debitsonore400 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debitSonore400', __('tables.sound_level400')) !!}
    {!! Form::number('debitSonore400', null, ['class' => 'form-control']) !!}
</div>

<!-- Idruche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRuche', __('tables.hive_id')) !!}
    <select class="form-control" name="idRucher">
        @foreach($ruches as $ruche)
            <option value="{!! $ruche->id !!}">{!! $ruche->id !!}</option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mesures.index') !!}" class="btn btn-default">{{__('tables.cancel')}}</a>
</div>
