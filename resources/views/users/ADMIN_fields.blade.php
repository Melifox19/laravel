<!-- ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'ID:') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::date('email_verified_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Rôle:') !!}
    {!! Form::select('type', ['user' => 'Apiculteur', 'admin' => 'Administrateur'], null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- created_at Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Date de création:') !!}
    {!! Form::text('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- updated_at Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Dernière MàJ:') !!}
    {!! Form::text('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- deleted_at Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Date de supression:') !!}
    {!! Form::text('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Retour</a>
</div>
