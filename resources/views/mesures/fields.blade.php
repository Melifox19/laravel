<!-- Horodatagemesure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horodatageMesure', 'Horodatagemesure:') !!}
    {!! Form::date('horodatageMesure', null, ['class' => 'form-control']) !!}
</div>

<!-- Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperature', 'Temperature:') !!}
    {!! Form::number('temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Humidite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('humidite', 'Humidite:') !!}
    {!! Form::number('humidite', null, ['class' => 'form-control']) !!}
</div>

<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveauBatterie', 'Niveaubatterie:') !!}
    {!! Form::number('niveauBatterie', null, ['class' => 'form-control']) !!}
</div>

<!-- Debitsonore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debitSonore', 'Debitsonore:') !!}
    {!! Form::number('debitSonore', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mesures.index') !!}" class="btn btn-default">Cancel</a>
</div>
