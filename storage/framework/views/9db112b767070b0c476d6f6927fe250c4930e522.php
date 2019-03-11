<!-- Horodatagealerte Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('horodatageAlerte', 'Horodatagealerte:'); ?>

    <?php echo Form::date('horodatageAlerte', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::select('type', ['capteur' => 'Capteur', 'mesure' => 'Mesure', 'vol' => 'Vol'], null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>

<!-- Idruche Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idRuche', 'Idruche:'); ?>

    <?php echo Form::text('idRuche', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('alertes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
