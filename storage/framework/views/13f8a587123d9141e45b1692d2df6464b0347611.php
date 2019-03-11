<!-- ID Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('id', 'ID:'); ?>

    <?php echo Form::text('id', null, ['class' => 'form-control']); ?>

</div>

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

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <?php echo Form::date('email_verified_at', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Mot de passe:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role', 'Rôle:'); ?>

    <?php echo Form::select('type', ['user' => 'Apiculteur', 'admin' => 'Administrateur'], null, ['class' => 'form-control']); ?>

</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <?php echo Form::text('remember_token', null, ['class' => 'form-control']); ?>

</div>

<!-- created_at Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('created_at', 'Date de création:'); ?>

    <?php echo Form::text('created_at', null, ['class' => 'form-control']); ?>

</div>

<!-- updated_at Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('updated_at', 'Dernière MàJ:'); ?>

    <?php echo Form::text('updated_at', null, ['class' => 'form-control']); ?>

</div>

<!-- deleted_at Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('deleted_at', 'Date de supression:'); ?>

    <?php echo Form::text('deleted_at', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Sauvegarder', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('users.index'); ?>" class="btn btn-default">Retour</a>
</div>
