<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $alerte->id !!}</p>
</div>

<!-- Horodatagealerte Field -->
<div class="form-group">
    {!! Form::label('horodatageAlerte', 'Horodatagealerte:') !!}
    <p>{!! $alerte->horodatageAlerte !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $alerte->type !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $alerte->description !!}</p>
</div>

<!-- Idruche Field -->
<div class="form-group">
    {!! Form::label('idRuche', 'Idruche:') !!}
    <p>{!! $alerte->idRuche !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $alerte->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $alerte->updated_at !!}</p>
</div>

