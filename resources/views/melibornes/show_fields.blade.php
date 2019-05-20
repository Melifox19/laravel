@if(Auth::user()->role == 'Admin')
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $meliborne->id !!}</p>
</div>
@endif

<!-- Niveaubatterie Field -->
<div class="form-group">
    {!! Form::label('niveauBatterie', __('tables.battery')) !!}
    <p>{!! $meliborne->niveauBatterie !!}</p>
</div>

<!-- Longitude Field -->
<div class="form-group">
    {!! Form::label('longitude', __('tables.longitude')) !!}
    <p>{!! $meliborne->longitude !!}</p>
</div>

<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude', __('tables.latitude')) !!}
    <p>{!! $meliborne->latitude !!}</p>
</div>

<!-- Idsigfox Field -->
<div class="form-group">
    {!! Form::label('idSigfox', __('tables.sigfox_id')) !!}
    <p>{!! $meliborne->idSigfox !!}</p>
</div>

<!-- Idmeliborne Field -->
<div class="form-group">
    {!! Form::label('idRucher', __('tables.in_apiary')) !!}
    <p>{!! $meliborne->idRucher !!} - {!! $rucher->nom !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('tables.created_at')) !!}
    <p>{!! $meliborne->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('tables.updated_at')) !!}
    <p>{!! $meliborne->updated_at !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('melibornes.edit', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(__('tables.sure'))"]) !!}
</div>
{!! Form::close() !!}
</div>
