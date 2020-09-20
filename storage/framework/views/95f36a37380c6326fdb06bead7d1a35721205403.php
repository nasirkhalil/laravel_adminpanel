<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_create')): ?>
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="<?php echo e(route("admin.pages.create")); ?>">
            <?php echo e(trans('global.add')); ?>

        </a>
    </div>
</div>
<?php endif; ?>
<div class="card">
    <div class="card-header">Pages</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr data-entry-id="<?php echo e($val->id); ?>">
                        <td>

                        </td>
                        <td>
                            <?php echo e($val->name ?? ''); ?>

                        </td>
                        <td>
                            <?php echo e($val->description ?? ''); ?>

                        </td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.pages.show', $val->id)); ?>">View</a>
                            <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.pages.edit', $val->id)); ?>">Edit</a>
                            <form action="<?php echo e(route('admin.pages.destroy', $val->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                            </form>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script>
    $(function () {
      let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
      let deleteButton = {
        text: deleteButtonTrans,
        url: "<?php echo e(route('admin.products.massDestroy')); ?>",
        className: 'btn-danger',
        action: function (e, dt, node, config) {
          var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
              return $(entry).data('entry-id')
          });

          if (ids.length === 0) {
            alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

            return
        }

        if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
            $.ajax({
              headers: {'x-csrf-token': _token},
              method: 'POST',
              url: config.url,
              data: { ids: ids, _method: 'DELETE' }})
            .done(function () { location.reload() })
        }
    }
}
let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_delete')): ?>
dtButtons.push(deleteButton)
<?php endif; ?>

$('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveldaily\resources\views/admin/pages/index.blade.php ENDPATH**/ ?>