<?php if(Auth::user()->role == 'admin'): ?>
<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $rucher->id; ?></p>
</div>
<?php endif; ?>

<!-- Nom Field -->
<div class="form-group">
    <?php echo Form::label('nom', 'Nom:'); ?>

    <p><?php echo $rucher->nom; ?></p>
</div>

<?php if(Auth::user()->role == 'admin'): ?>
<!-- Idapiculteur Field -->
<div class="form-group">
    <?php echo Form::label('idApiculteur', 'Propriétaire:'); ?>

    <p><?php echo $rucher->idApiculteur; ?> - <?php echo $user->name; ?></p>
</div>
<?php endif; ?>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Créé le:'); ?>

    <p><?php echo $rucher->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Denière mise à jour:'); ?>

    <p><?php echo $rucher->updated_at; ?></p>
</div>

<div class="form-group">
  <?php echo Form::label('actions', 'Actions:'); ?>

<?php echo Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']); ?>

<div class='btn-group'>
  <a href="<?php echo route('ruchers.edit', [$rucher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]); ?>

</div>
<?php echo Form::close(); ?>

</div>
