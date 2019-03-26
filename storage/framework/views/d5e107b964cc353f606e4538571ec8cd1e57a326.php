<!-- Nom Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nom', 'Nom:'); ?>

    <?php echo Form::text('nom', null, ['class' => 'form-control']); ?>

</div>

<?php if( Auth::user()->role == 'admin' ): ?>
<!-- Idapiculteur Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idApiculteur', 'Idapiculteur:'); ?>

    <select class="form-control" name="idApiculteur">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo $user->id; ?>"><?php echo $user->name; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<?php endif; ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Sauvegarder', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ruchers.index'); ?>" class="btn btn-default">Retour</a>
</div>
