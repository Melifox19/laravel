<table class="table table-responsive" id="mesures-table">
    <thead>
        <tr>
        <th>Date & heure</th>
        <th>Masse</th>
        <th>Température intérieure</th>
        <th>Température extérieure</th>
        <th>Taux d'humidité intérieure</th>
        <th>Taux d'humidité extérieure</th>
        <th>Pression</th>
        <th>Niveau de batterie</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Debit sonore 200Hz</th>
        <th>Debit sonore 400Hz</th>
        <th>ID Ruche</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $mesures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mesure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $mesure->horodatageMesure; ?></td>
            <td><?php echo $mesure->masse; ?></td>
            <td><?php echo $mesure->temperatureInt; ?></td>
            <td><?php echo $mesure->temperatureExt; ?></td>
            <td><?php echo $mesure->humiditeInt; ?></td>
            <td><?php echo $mesure->humiditeExt; ?></td>
            <td><?php echo $mesure->pression; ?></td>
            <td><?php echo $mesure->niveauBatterie; ?></td>
            <td><?php echo $mesure->longitude; ?></td>
            <td><?php echo $mesure->latitude; ?></td>
            <td><?php echo $mesure->debitSonore200; ?></td>
            <td><?php echo $mesure->debitSonore400; ?></td>
            <td><?php echo $mesure->idRuche; ?></td>
            <td>
                <?php echo Form::open(['route' => ['mesures.destroy', $mesure->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('mesures.show', [$mesure->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('mesures.edit', [$mesure->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
