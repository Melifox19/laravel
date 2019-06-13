<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $alerte->id !!}</p>
</div>

<!-- Horodatagealerte Field -->
<div class="form-group">
    {!! Form::label('horodatageAlerte', __('tables.timestamp')) !!}
    <p>{!! $alerte->horodatageAlerte !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('tables.alert_typ')) !!}
    <p>{!! $alerte->type !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('tables.desc')) !!}
    <p>{!! $alerte->description !!}</p>
</div>

<!-- Idruche Field -->
<div class="form-group">
    {!! Form::label('idRuche', __('tables.hive_id')) !!}
    <p>{!! $alerte->idRuche !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Aller à la ruche:') !!}
{!! Form::open(['route' => ['ruches.destroy', $ruche->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('ruches.show', [$mesure->idRuche]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
</div>
{!! Form::close() !!}
</div>
