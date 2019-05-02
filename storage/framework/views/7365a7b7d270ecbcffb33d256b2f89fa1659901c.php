<link href="<?php echo asset('css/users_show.css'); ?>" media="all" rel="stylesheet" type="text/css" />

<div class="form-group">
  <?php echo Form::label('', 'Liste des ruches :'); ?>



  <table class="table table-responsive" id="ruchers-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Date de création</th>
        <th>Dernière modification</th>
        <th colspan="3">Voir rucher </th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $user->ruchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="rucher_case">
        <tr>
          <td><?php echo $rucher->id; ?></td>
          <td><?php echo $rucher->nom; ?></td>
          <td><?php echo $rucher->created_at; ?></td>
          <td><?php echo $rucher->updated_at; ?></td>
          <td>

            <?php echo Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']); ?>

            <div class='btn-group'>
              <a href="<?php echo route('ruchers.show', [$rucher->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            </div>
            <?php echo Form::close(); ?>

          </td>
        </tr>

        <tr class="allRuche_case" >
          <?php $__currentLoopData = $rucher->ruches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td class="ruche_case">
            <?php if (isset($ruche->addrMelinet))
            { ?>
              Ruche : <?php echo $rucher->id; ?>-<?php echo $ruche->addrMelinet; ?> <?php
            }
            else
            { ?>
              Melilabo : <?php echo $rucher->id; ?>-<?php echo $ruche->idSigfox; ?> <?php
            } ?>
            <div class='btn-group'>
              <a href="<?php echo route('ruches.show', [$ruche->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            </div>
          </td>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
