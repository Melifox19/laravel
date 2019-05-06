@if(Auth::user()->role == 'admin')
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $rucher->id !!}</p>
</div>
@endif

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{!! $rucher->nom !!}</p>
</div>

@if(Auth::user()->role == 'admin')
<!-- Idapiculteur Field -->
<div class="form-group">
    {!! Form::label('idApiculteur', 'Propriétaire:') !!}
    <p>{!! $rucher->idApiculteur !!} - {!! $user->name !!}</p>
</div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Créé le:') !!}
    <p>{!! $rucher->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Denière mise à jour:') !!}
    <p>{!! $rucher->updated_at !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('ruchers.edit', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
</div>
{!! Form::close() !!}
</div>
