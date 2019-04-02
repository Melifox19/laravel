<script src="<?php echo e(URL::asset('js/rucheForm.js')); ?>" type="text/text/javascript"></script>

<!-- Addrmelinet Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('addrMelinet', 'Adresse locale:'); ?>

    <?php echo Form::text('addrMelinet', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::select('type', array(
    'meliruche' => 'Méliruche',
    'melilabo' => 'Mélilabo'),
    null, array(
    'onchange' => 'javascript:changeDisplay()',
    'class' => 'form-control'
    )); ?>

</div>

<!-- Idrucher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idRucher', 'Appartient au rucher:'); ?>

    <select class="form-control" name="idRucher">
        <?php $__currentLoopData = $ruchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $rucher->id; ?>"><?php echo $rucher->id; ?> - <?php echo $rucher->nom; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Idmeliborne Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idMeliborne', 'Appartient à la Méliborne:'); ?>

    <select class="form-control" name="idRucher">
        <?php $__currentLoopData = $melibornes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meliborne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $meliborne->id; ?>"><?php echo $meliborne->id; ?> - <?php echo $meliborne->nom; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>-
</div>

<!-- Idsigfox Field -->
<div class="form-group col-sm-6" style="display:none">
    <?php echo Form::label('idSigfox', 'ID SigFox:'); ?>

    <?php echo Form::text('idSigfox', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ruches.index'); ?>" class="btn btn-default">Cancel</a>
</div>
