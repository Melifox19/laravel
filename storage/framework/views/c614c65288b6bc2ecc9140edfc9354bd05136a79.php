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

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Créé le:'); ?>

    <p><?php echo $user->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Dernière mise à jour:'); ?>

    <p><?php echo $user->updated_at; ?></p>
</div>

<div class="form-group">
  <?php echo Form::label('actions', 'Actions:'); ?>

<?php echo Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']); ?>

<div class='btn-group'>
  <a href="<?php echo route('users.edit', [$user->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]); ?>

</div>
<?php echo Form::close(); ?>

</div>
