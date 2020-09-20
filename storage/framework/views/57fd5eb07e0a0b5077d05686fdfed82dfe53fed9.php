<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Create</div>
    <div class="card-body">
        <form action="<?php echo e(route("admin.pages.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Parent</label>
                <select id="parent" name="parent" class="form-control">
                    <option value="">--Select--</option>
                    <?php $__empty_1 = true; $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="<?php echo e($parent->id); ?>"><?php echo e($parent->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <option value="">No Data found.</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Title</label>
                <input type="text" id="meta_title" name="meta_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Tag</label>
                <input type="text" id="meta_tag" name="meta_tag" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Description</label>
                <input type="text" id="meta_descriptions" name="meta_descriptions" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Short Description</label>
                <textarea name="short_description" id="short_description"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Details</label>
                <textarea name="details" id="details"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Meta Tag</label>
                <input type="file" id="banner" name="banner" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Banner Alt</label>
                <input type="text" id="banner_alt" name="banner_alt" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Banner Title</label>
                <input type="text" id="banner_title" name="banner_title" class="form-control">
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveldaily\resources\views/admin/pages/create.blade.php ENDPATH**/ ?>