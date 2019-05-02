<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Meliborne
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <?php echo $__env->make('melibornes.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <a href="<?php echo route('melibornes.index'); ?>" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>