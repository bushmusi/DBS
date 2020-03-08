<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">Left</div>
        <div class="col-lg-8">
            <div class="row">
                <div class="float-right" align="right">
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
            <br>
            <table class="table  table-bordered  table-hover table-responsive w-100" id="users-table" cellspacing="0" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="col">Right</div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('datatables.data'); ?>',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
            { data: 'delete', name: 'delete', orderable: false, searchable: false}
        ]
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bisrat\Desktop\Laravel\blog\resources\views/data-table.blade.php ENDPATH**/ ?>