<!-- Nom Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nom', 'Nom:'); ?>

    <?php echo Form::text('nom', null, ['class' => 'form-control']); ?>

</div>

<!-- Idapiculteur Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idApiculteur', 'Idapiculteur:'); ?>

    <?php echo Form::number('idApiculteur', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Sauvegarder', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ruchers.index'); ?>" class="btn btn-default">Retour</a>
</div>
