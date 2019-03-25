<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Nom:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'E-mail:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Mot de passe:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Confirm Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password_confirmation', 'Confirmation du mot de passe:'); ?>

    <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role', 'Rôle:'); ?>

    <?php echo Form::select('role', array('user' => 'Apiculteur', 'admin' => 'Administrateur'), null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Sauvegarder', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('users.index'); ?>" class="btn btn-default">Retour</a>
</div>
