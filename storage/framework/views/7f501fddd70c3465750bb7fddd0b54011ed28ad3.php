<table class="table table-responsive" id="users-table">
  <thead>
    <tr>
      <th>ID
        <th>Nom</th>
        <th>E-mail</th>
        <th>Email verifié</th>
        <th>Mot de passe</th>
        <th>Jeton mémoire</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>

        <?php if(is_null($user->email_verified_at)): ?>
        <td> &#10005; </td>
        <?php else: ?>
        <td> &#10003; </td>
        <?php endif; ?>
        <td><?php echo $user->password; ?></td>
        <td><?php echo $user->remember_token; ?></td>


        <td>
          <?php echo Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']); ?>

          <div class='btn-group'>
            <a href="<?php echo route('users.show', [$user->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="<?php echo route('users.edit', [$user->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

          </div>
          <?php echo Form::close(); ?>

        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
