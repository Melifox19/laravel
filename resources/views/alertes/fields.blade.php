<!-- Horodatagealerte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horodatageAlerte', 'Horodatagealerte:') !!}
    {!! Form::date('horodatageAlerte', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['capteur' => 'Capteur', 'mesure' => 'Mesure', 'vol' => 'Vol'], null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Idruche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRuche', 'Idruche:') !!}
    {!! Form::text('idRuche', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alertes.index') !!}" class="btn btn-default">Cancel</a>
</div>
