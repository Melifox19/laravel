<!-- Addrmelinet Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('addrMelinet', 'Addrmelinet:'); ?>

    <?php echo Form::text('addrMelinet', null, ['class' => 'form-control']); ?>

</div>

<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idSigfox', 'Idsigfox:'); ?>

    <?php echo Form::text('idSigfox', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::select('type', ['meliruche' => 'Méliruche', 'melilabo' => 'Mélilabo'], null, ['class' => 'form-control']); ?>

</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idRucher', 'Idrucher:'); ?>

    <?php echo Form::text('idRucher', null, ['class' => 'form-control']); ?>

</div>

<!-- Idmeliborne Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idMeliborne', 'Idmeliborne:'); ?>

    <?php echo Form::text('idMeliborne', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ruches.index'); ?>" class="btn btn-default">Cancel</a>
</div>
