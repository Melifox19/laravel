<table class="table table-responsive" id="ruchers-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Propriétaire</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php $__currentLoopData = $ruchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <td><?php echo $rucher->id; ?></td>
      <td><?php echo $rucher->nom; ?></td>
      <td><?php echo $rucher->idApiculteur; ?></td>
      <td>
        <?php echo Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']); ?>

        <div class='btn-group'>
          <a href="<?php echo route('ruchers.show', [$rucher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="<?php echo route('ruchers.edit', [$rucher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
          <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

        </div>
        <?php echo Form::close(); ?>

      </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
