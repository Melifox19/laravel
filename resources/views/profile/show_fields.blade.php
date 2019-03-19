<?php
$user = App\User::where('id', Auth::user()->id)->first();
?>

<!-- Name Field -->
<div class="form-group">
  {!! Form::label('name', 'Nom:') !!}
  <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
  {!! Form::label('email', 'E-mail:') !!}
  <p>{!! $user->email !!}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
  {!! Form::label('email_verified_at', 'Email verifié:') !!}
  @if (is_null($user->email_verified_at))
  <p> &#10005; </p>
  @else
  <p> &#10003; </p>
  @endif
</div>

<!-- Password Field -->
<div class="form-group">
  {!! Form::label('password', 'Mot de passe:') !!}
  <p>************</p>
</div>

<!-- Created At Field -->
<div class="form-group">
  {!! Form::label('created_at', 'Date de création:') !!}
  <p>{!! $user->created_at !!}</p>
</div>

<a href="{!! route('profile.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
