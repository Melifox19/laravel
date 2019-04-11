<table class="table table-responsive" id="alertes-table">
    <thead>
        <tr>
            <th>Horodatagealerte</th>
        <th>Type</th>
        <th>Description</th>
        <th>Idruche</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $alertes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alerte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $alerte->horodatageAlerte; ?></td>
            <td><?php echo $alerte->type; ?></td>
            <td><?php echo $alerte->description; ?></td>
            <td><?php echo $alerte->idRuche; ?></td>
            <td>
                <?php echo Form::open(['route' => ['alertes.destroy', $alerte->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('alertes.show', [$alerte->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('alertes.edit', [$alerte->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>