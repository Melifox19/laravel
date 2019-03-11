<table class="table table-responsive" id="ruches-table">
    <thead>
        <tr>
            <th>Addrmelinet</th>
        <th>Idsigfox</th>
        <th>Type</th>
        <th>Idrucher</th>
        <th>Idmeliborne</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ruches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $ruche->addrMelinet; ?></td>
            <td><?php echo $ruche->idSigfox; ?></td>
            <td><?php echo $ruche->type; ?></td>
            <td><?php echo $ruche->idRucher; ?></td>
            <td><?php echo $ruche->idMeliborne; ?></td>
            <td>
                <?php echo Form::open(['route' => ['ruches.destroy', $ruche->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('ruches.show', [$ruche->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('ruches.edit', [$ruche->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>