<table class="table table-responsive" id="melibornes-table">
    <thead>
        <tr>
            <th>Niveaubatterie</th>
        <th>Idsigfox</th>
        <th>Idrucher</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $melibornes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meliborne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $meliborne->niveauBatterie; ?></td>
            <td><?php echo $meliborne->idSigfox; ?></td>
            <td><?php echo $meliborne->idRucher; ?></td>
            <td>
                <?php echo Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('melibornes.show', [$meliborne->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('melibornes.edit', [$meliborne->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>