<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nom:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>


    <?php if($errors->has('name')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'E-mail:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>


    <?php if($errors->has('email')): ?>
      <span class="help-block">
          <strong><?php echo e($errors->first('email')); ?></strong>
      </span>
  <?php endif; ?>
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Mot de passe:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>


    <?php if($errors->has('password')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('password')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<!-- Confirm Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password_confirm', 'Confirmation du mot de passe:'); ?>

    <?php echo Form::password('password_confirm', ['class' => 'form-control']); ?>


    <?php if($errors->has('password_confirmation')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
        </span>
    <?php endif; ?>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Sauvegarder', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('profile.index'); ?>" class="btn btn-default">Retour</a>
</div>
