<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', __('tables.name')) !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

@if ( Auth::user()->role == 'admin' )
<!-- Idapiculteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idApiculteur', __('tables.owner')) !!}
    <select class="form-control" name="idApiculteur">
        @foreach($users as $user)
            <option value="{!! $user->id !!}">{!! $user->name !!}</option>
        @endforeach
    </select>
</div>

@else

<div class="form-group col-sm-6">
    {!! Form::hidden('idApiculteur', Auth::user()->id) !!}
</div>

@endif


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ruchers.index') !!}" class="btn btn-default">{{ __('tables.cancel')}}</a>
</div>
