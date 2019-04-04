<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $user->id; ?></p>
</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Nom:'); ?>

    <p><?php echo $user->name; ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'E-mail:'); ?>

    <p><?php echo $user->email; ?></p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    <?php echo Form::label('email_verified_at', 'Email verifié:'); ?>

    <?php if(is_null($user->email_verified_at)): ?>
    <p> &#10005; </p>
    <?php else: ?>
    <p> &#10003; </p>
    <?php endif; ?>
</div>

<!-- Password Field -->
<div class="form-group">
    <?php echo Form::label('password', 'Mot de passe:'); ?>

    <p>************</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    <?php echo Form::label('remember_token', 'Jeton mémoire:'); ?>

    <p><?php echo $user->remember_token; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Date de création:'); ?>

    <p><?php echo $user->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Dernière MàJ:'); ?>

    <p><?php echo $user->updated_at; ?></p>
</div>
