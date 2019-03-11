<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Idapiculteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idApiculteur', 'Idapiculteur:') !!}
    {!! Form::number('idApiculteur', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ruchers.index') !!}" class="btn btn-default">Retour</a>
</div>
