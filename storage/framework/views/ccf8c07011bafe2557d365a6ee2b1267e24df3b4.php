<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Create</div>
    <div class="card-body">
       <form action="<?php echo e(route("admin.pages.update", [$page->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Parent</label>
            <select id="parent" name="parent" class="form-control">
                <option value="0">--Select--</option>
                <?php $__empty_1 = true; $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($parent->id); ?>" <?php echo e($parent->id == $page->parent ? 'selected' : ''); ?> ><?php echo e($parent->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value="">No Data found.</option>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" value="<?php echo e($page->name); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Title</label>
            <input type="text" id="meta_title" name="meta_title" value="<?php echo e($page->meta_title); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Tag</label>
            <input type="text" id="meta_tag" name="meta_tag" value="<?php echo e($page->meta_tag); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Description</label>
            <input type="text" id="meta_descriptions" name="meta_descriptions" value="<?php echo e($page->meta_descriptions); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Short Description</label>
            <textarea name="short_description" id="short_description"><?php echo e($page->short_description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="name">Details</label>
            <textarea name="details" id="details"><?php echo e($page->details); ?></textarea>
        </div>
        <div class="form-group">
            <label for="name">Banner Image</label>
            <input type="file" id="banner" name="banner" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Banner Alt</label>
            <input type="text" id="banner_alt" name="banner_alt" value="<?php echo e($page->banner_alt); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Banner Title</label>
            <input type="text" id="banner_title" name="banner_title" value="<?php echo e($page->banner_title); ?>" class="form-control">
        </div>
        <div>
            <input class="btn btn-danger" type="submit" value="Save">
        </div>
    </form>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveldaily\resources\views/admin/pages/edit.blade.php ENDPATH**/ ?>