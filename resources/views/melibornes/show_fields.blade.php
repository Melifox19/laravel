@if(Auth::user()->role == 'Admin')
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $meliborne->id !!}</p>
</div>
@endif

<!-- Niveaubatterie Field -->
<div class="form-group">
    {!! Form::label('niveauBatterie', 'Niveau de batterie:') !!}
    <p>{!! $meliborne->niveauBatterie !!}</p>
</div>

<!-- Idsigfox Field -->
<div class="form-group">
    {!! Form::label('idSigfox', 'ID SigFox:') !!}
    <p>{!! $meliborne->idSigfox !!}</p>
</div>

<!-- Idmeliborne Field -->
<div class="form-group">
    {!! Form::label('idRucher', 'Dans le meliborne:') !!}
    <p>{!! $meliborne->idRucher !!} - {!! $rucher->nom !!}</p>
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

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('melibornes.edit', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
</div>
{!! Form::close() !!}
</div>
