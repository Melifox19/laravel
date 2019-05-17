@if(Auth::user()->role == 'admin')
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $rucher->id !!}</p>
</div>
@endif

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', __('tables.name')) !!}
    <p>{!! $rucher->nom !!}</p>
</div>

@if(Auth::user()->role == 'admin')
<!-- Idapiculteur Field -->
<div class="form-group">
    {!! Form::label('idApiculteur', __('tables.owner')) !!}
    <p>{!! $rucher->idApiculteur !!} - {!! $user->name !!}</p>
</div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('tables.created_at')) !!}
    <p>{!! $rucher->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('tables.updated_at')) !!}
    <p>{!! $rucher->updated_at !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('ruchers.edit', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(__('tables.sure'))"]) !!}
</div>
{!! Form::close() !!}
</div>
