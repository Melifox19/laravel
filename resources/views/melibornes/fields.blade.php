<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveauBatterie', 'Niveaubatterie:') !!}
    {!! Form::number('niveauBatterie', null, ['class' => 'form-control']) !!}
</div>

<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idSigfox', 'Idsigfox:') !!}
    {!! Form::text('idSigfox', null, ['class' => 'form-control']) !!}
</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRucher', 'Idrucher:') !!}
    {!! Form::number('idRucher', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('melibornes.index') !!}" class="btn btn-default">Cancel</a>
</div>
