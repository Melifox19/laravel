<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idSigfox', __('tables.sigfox_id')) !!}
    {!! Form::text('idSigfox', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('melibornes.index') !!}" class="btn btn-default">{{ __('tables.cancel') }}</a>
</div>
