<!-- ID Field -->
<div class="form-group col-sm-6" id="id">
    {!! Form::label('id', __('tables.id')) !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('tables.hive_typ')) !!}
    {!! Form::select('type', array(
    'meliruche' => 'MéliRuche',
    'melilabo' => 'MéliLabo'),
    null, array(
    'onchange' => 'javascript:changeDisplay()',
    'class' => 'form-control'
    )) !!}
</div>

<!-- Addrmelinet Field -->
<div class="form-group col-sm-6" id="addrMelinetField">
    {!! Form::label('addrMelinet', __('tables.local_addr')) !!}
    {!! Form::text('addrMelinet', null, ['class' => 'form-control']) !!}
</div>


<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRucher', __('tables.in_apiary')) !!}
    <select class="form-control" name="idRucher">
        @foreach($ruchers as $rucher)
        <option value="{!! $rucher->id !!}">{!! $rucher->id !!} - {!! $rucher->nom !!}</option>
        @endforeach
    </select>
</div>

<!-- Idmeliborne Field -->
<div id="meliborneField" class="form-group col-sm-6">
    {!! Form::label('idMeliborne', __('tables.meliborne_own')) !!}
    <select class="form-control" name="idMeliborne">
        @foreach($melibornes as $meliborne)
        <option value="{!! $meliborne->id !!}">{!! $meliborne->id !!} - {!! $meliborne->idSigfox !!}</option>
        @endforeach
    </select>
</div>

<!-- Idsigfox Field -->
<div id="sigfoxField" class="form-group col-sm-6">
    {!! Form::label('idSigfox', __('tables.sigfox_id')) !!}
    {!! Form::text('idSigfox', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ruches.index') !!}" class="btn btn-default">{{__('tables.cancel')}}</a>
</div>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/rucheForm.js') }}" type="text/javascript"></script>
