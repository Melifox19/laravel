<?php
$user = App\User::where('id', Auth::user()->id)->first();
?>

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
  <?php echo Form::label('created_at', 'Date de création:'); ?>

  <p><?php echo $user->created_at; ?></p>
</div>

<a href="<?php echo route('profile.edit', [$user->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
