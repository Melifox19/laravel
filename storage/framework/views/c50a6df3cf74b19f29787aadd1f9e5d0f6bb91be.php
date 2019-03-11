<!-- Niveaubatterie Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('niveauBatterie', 'Niveaubatterie:'); ?>

    <?php echo Form::number('niveauBatterie', null, ['class' => 'form-control']); ?>

</div>

<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idSigfox', 'Idsigfox:'); ?>

    <?php echo Form::text('idSigfox', null, ['class' => 'form-control']); ?>

</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idRucher', 'Idrucher:'); ?>

    <?php echo Form::number('idRucher', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('melibornes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
