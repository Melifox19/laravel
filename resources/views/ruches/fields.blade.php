<!-- Addrmelinet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addrMelinet', 'Addrmelinet:') !!}
    {!! Form::text('addrMelinet', null, ['class' => 'form-control']) !!}
</div>

<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idSigfox', 'Idsigfox:') !!}
    {!! Form::text('idSigfox', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['meliruche' => 'Méliruche', 'melilabo' => 'Mélilabo'], null, ['class' => 'form-control']) !!}
</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRucher', 'Idrucher:') !!}
    {!! Form::text('idRucher', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmeliborne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMeliborne', 'Idmeliborne:') !!}
    {!! Form::text('idMeliborne', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ruches.index') !!}" class="btn btn-default">Cancel</a>
</div>
