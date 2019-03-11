<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $rucher->id !!}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{!! $rucher->nom !!}</p>
</div>

<!-- Idapiculteur Field -->
<div class="form-group">
    {!! Form::label('idApiculteur', 'Idapiculteur:') !!}
    <p>{!! $rucher->idApiculteur !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $rucher->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $rucher->updated_at !!}</p>
</div>

