<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('tables.name')) !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'E-mail:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', __('tables.email_verif'))  !!}
    @if (is_null($user->email_verified_at))
    <p> &#10005; </p>
    @else
    <p> &#10003; </p>
    @endif
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', __('tables.psswd')) !!}
    <p>************</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('tables.created_at')) !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('tables.updated_at')) !!}
    <p>{!! $user->updated_at !!}</p>
</div>

<div class="form-group">
  {!! Form::label('actions', 'Actions:') !!}
{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
<div class='btn-group'>
  <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm( __('tables.sure') )"]) !!}
</div>
{!! Form::close() !!}
</div>
