<script src="{{ URL::asset('js/rucheForm.js')}}" type="text/javascript"></script>

<!-- Addrmelinet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addrMelinet', 'Adresse MéliNet:') !!}
    {!! Form::text('addrMelinet', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', array(
    'meliruche' => 'Méliruche',
    'melilabo' => 'Mélilabo'),
    null, array(
    'onchange' => 'javascript:changeDisplay()',
    'class' => 'form-control'
    )) !!}
</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRucher', 'Appartient au rucher:') !!}
    <select class="form-control" name="idRucher">
        @foreach($ruchers as $rucher)
        <option value="{!! $rucher->id !!}">{!! $rucher->id !!} - {!! $rucher->nom !!}</option>
        @endforeach
    </select>
</div>

<!-- Idmeliborne Field -->
<div id="meliborneField" class="form-group col-sm-6" style="display:block">
    {!! Form::label('idMeliborne', 'Appartient à la Méliborne:') !!}
    <select class="form-control" name="idMeliborne">
        @foreach($melibornes as $meliborne)
        <option value="{!! $meliborne->id !!}">{!! $meliborne->id !!} - {!! $meliborne->idSigfox !!}</option>
        @endforeach
    </select>
</div>

<!-- Idsigfox Field -->
<div id="sigfoxField" class="form-group col-sm-6" style="display:none">
    {!! Form::label('idSigfox', 'ID SigFox:') !!}
    {!! Form::text('idSigfox', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ruches.index') !!}" class="btn btn-default">Cancel</a>
</div>
