<?php if(Auth::user()->role == 'Admin'): ?>
<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'ID:'); ?>

    <p><?php echo $meliborne->id; ?></p>
</div>
<?php endif; ?>

<!-- Niveaubatterie Field -->
<div class="form-group">
    <?php echo Form::label('niveauBatterie', 'Niveau de batterie:'); ?>

    <p><?php echo $meliborne->niveauBatterie; ?></p>
</div>

<!-- Idsigfox Field -->
<div class="form-group">
    <?php echo Form::label('idSigfox', 'ID SigFox:'); ?>

    <p><?php echo $meliborne->idSigfox; ?></p>
</div>

<!-- Idmeliborne Field -->
<div class="form-group">
    <?php echo Form::label('idRucher', 'Dans le meliborne:'); ?>

    <p><?php echo $meliborne->idRucher; ?> - <?php echo $rucher->nom; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $meliborne->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $meliborne->updated_at; ?></p>
</div>

<div class="form-group">
  <?php echo Form::label('actions', 'Actions:'); ?>

<?php echo Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']); ?>

<div class='btn-group'>
  <a href="<?php echo route('melibornes.edit', [$meliborne->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]); ?>

</div>
<?php echo Form::close(); ?>

</div>
