<!-- Idsigfox Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idSigfox', 'ID SigFox:'); ?>

    <?php echo Form::text('idSigfox', null, ['class' => 'form-control']); ?>

</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idRucher', 'Appartient au rucher:'); ?>

    <select class="form-control" name="idApiculteur">
        <?php $__currentLoopData = $ruchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo $rucher->id; ?>"><?php echo $rucher->id; ?> - <?php echo $rucher->nom; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('melibornes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
