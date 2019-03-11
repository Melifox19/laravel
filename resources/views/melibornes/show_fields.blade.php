<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $meliborne->id !!}</p>
</div>

<!-- Niveaubatterie Field -->
<div class="form-group">
    {!! Form::label('niveauBatterie', 'Niveaubatterie:') !!}
    <p>{!! $meliborne->niveauBatterie !!}</p>
</div>

<!-- Idsigfox Field -->
<div class="form-group">
    {!! Form::label('idSigfox', 'Idsigfox:') !!}
    <p>{!! $meliborne->idSigfox !!}</p>
</div>

<!-- Idrucher Field -->
<div class="form-group">
    {!! Form::label('idRucher', 'Idrucher:') !!}
    <p>{!! $meliborne->idRucher !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $meliborne->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $meliborne->updated_at !!}</p>
</div>

