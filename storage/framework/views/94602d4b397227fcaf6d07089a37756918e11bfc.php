<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $rucher->id; ?></p>
</div>

<!-- Nom Field -->
<div class="form-group">
    <?php echo Form::label('nom', 'Nom:'); ?>

    <p><?php echo $rucher->nom; ?></p>
</div>

<!-- Idapiculteur Field -->
<div class="form-group">
    <?php echo Form::label('idApiculteur', 'Idapiculteur:'); ?>

    <p><?php echo $rucher->idApiculteur; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $rucher->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $rucher->updated_at; ?></p>
</div>

