<!-- Horodatagemesure Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('horodatageMesure', 'Horodatagemesure:'); ?>

    <?php echo Form::date('horodatageMesure', null, ['class' => 'form-control']); ?>

</div>

<!-- Temperature Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('temperature', 'Temperature:'); ?>

    <?php echo Form::number('temperature', null, ['class' => 'form-control']); ?>

</div>

<!-- Humidite Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('humidite', 'Humidite:'); ?>

    <?php echo Form::number('humidite', null, ['class' => 'form-control']); ?>

</div>

<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('niveauBatterie', 'Niveaubatterie:'); ?>

    <?php echo Form::number('niveauBatterie', null, ['class' => 'form-control']); ?>

</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('longitude', 'Longitude:'); ?>

    <?php echo Form::text('longitude', null, ['class' => 'form-control']); ?>

</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('latitude', 'Latitude:'); ?>

    <?php echo Form::text('latitude', null, ['class' => 'form-control']); ?>

</div>

<!-- Debitsonore Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('debitSonore', 'Debitsonore:'); ?>

    <?php echo Form::number('debitSonore', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('mesures.index'); ?>" class="btn btn-default">Cancel</a>
</div>
