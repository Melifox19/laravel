<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $alerte->id !!}</p>
</div>

<!-- Horodatagealerte Field -->
<div class="form-group">
    {!! Form::label('horodatageAlerte', 'Date & Heure:') !!}
    <p>{!! $alerte->horodatageAlerte !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type d'alerte:') !!}
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
