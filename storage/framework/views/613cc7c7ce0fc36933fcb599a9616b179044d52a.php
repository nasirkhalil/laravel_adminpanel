<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('global.product.title')); ?>

    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        <?php echo e(trans('global.product.fields.name')); ?>

                    </th>
                    <td>
                        <?php echo e($product->name); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.product.fields.description')); ?>

                    </th>
                    <td>
                        <?php echo $product->description; ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.product.fields.price')); ?>

                    </th>
                    <td>
                        $<?php echo e($product->price); ?>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveldaily\resources\views/admin/products/show.blade.php ENDPATH**/ ?>