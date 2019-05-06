<?php if(Auth::user()->role == 'admin'): ?>
<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $ruche->id; ?></p>
</div>
<?php endif; ?>

<!-- Type Field -->
<div class="form-group">
    <?php echo Form::label('type', 'Type:'); ?>

    <p><?php echo $ruche->type; ?></p>
</div>

<?php if($ruche->type == 'meliruche'): ?>
<!-- Addrmelinet Field -->
<div class="form-group">
    <?php echo Form::label('addrMelinet', 'Adresse Melinet:'); ?>

    <p><?php echo $ruche->addrMelinet; ?></p>
</div>
<?php endif; ?>

<?php if($ruche->type == 'melilabo'): ?>
<!-- Idsigfox Field -->
<div class="form-group">
    <?php echo Form::label('idSigfox', 'ID SigFox:'); ?>

    <p><?php echo $ruche->idSigfox; ?></p>
</div>
<?php endif; ?>

<!-- Idrucher Field -->
<div class="form-group">
    <?php echo Form::label('idRucher', 'Dans le rucher:'); ?>

    <p><?php echo $ruche->idRucher; ?> - <?php echo $rucher->nom; ?></p>
</div>

<?php if($ruche->type == 'meliruche'): ?>
<!-- Idmeliborne Field -->
<div class="form-group">
    <?php echo Form::label('idMeliborne', 'ID Meliborne:'); ?>

    <p><?php echo $ruche->idMeliborne; ?></p>
</div>
<?php endif; ?>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $ruche->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $ruche->updated_at; ?></p>
</div>

<div class="form-group">
  <?php echo Form::label('actions', 'Actions:'); ?>

<?php echo Form::open(['route' => ['ruches.destroy', $ruche->id], 'method' => 'delete']); ?>

<div class='btn-group'>
  <a href="<?php echo route('ruches.edit', [$ruche->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]); ?>

</div>
<?php echo Form::close(); ?>

</div>
