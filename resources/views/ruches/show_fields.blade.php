@if(Auth::user()->role == 'admin')
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $ruche->id !!}</p>
</div>
@endif

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('tables.hive_typ')) !!}
    <p>{!! $ruche->type !!}</p>
</div>

@if($ruche->type == 'meliruche')
<!-- Addrmelinet Field -->
<div class="form-group">
    {!! Form::label('addrMelinet', __('tables.local_addr')) !!}
    <p>{!! $ruche->addrMelinet !!}</p>
</div>
@endif

@if($ruche->type == 'melilabo')
<!-- Idsigfox Field -->
<div class="form-group">
    {!! Form::label('idSigfox', __('tables.sigfox_id')) !!}
    <p>{!! $ruche->idSigfox !!}</p>
</div>
@endif

@if($ruche->type == 'melilabo')
<!-- Longitude Field -->
<div class="form-group">
    {!! Form::label('longitude', __('tables.longitude')) !!}
    <p>{!! $ruche->longitude !!}</p>
</div>
@endif

@if($ruche->type == 'melilabo')
<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude', __('tables.latitude')) !!}
    <p>{!! $ruche->latitude !!}</p>
</div>
@endif

<!-- Idrucher Field -->
<div class="form-group">
    {!! Form::label('idRucher', __('tables.in_apiary')) !!}
    <p>{!! $ruche->idRucher !!} - {!! $rucher->nom !!}</p>
</div>

@if($ruche->type == 'meliruche')
<!-- Idmeliborne Field -->
<div class="form-group">
    {!! Form::label('idMeliborne', __('tables.meliborne_own')) !!}
    <p>{!! $ruche->idMeliborne !!}</p>
</div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('tables.created_at')) !!}
    <p>{!! $ruche->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('tables.updated_at')) !!}
    <p>{!! $ruche->updated_at !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['ruches.destroy', $ruche->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('ruches.edit', [$ruche->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
</div>
{!! Form::close() !!}
</div>
