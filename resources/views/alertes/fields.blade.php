<!-- Horodatagealerte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horodatageAlerte', __('tables.timestamp')) !!}
    {!! Form::date('horodatageAlerte', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('tables.alert_typ')) !!}
    {!! Form::select('type', ['capteur' => __('tables.sensor'), 'mesure' => __('tables.measure'), 'vol' => __('tables.steal')], null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('tables.desc')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Idruche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRuche', __('tables.hive_id')) !!}
    <select class="form-control" name="idRuche">
        @foreach($ruches as $ruche)
            <option value="{!! $ruche->id !!}">{!! $ruche->id !!}</option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alertes.index') !!}" class="btn btn-default">{{__('tables.cancel')}}</a>
</div>
