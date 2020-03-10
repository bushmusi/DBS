<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('register')); ?>" type="button" class="btn btn-primary">Add</a>
    </div>
    <br>
    <table class="table  table-bordered  table-hover table-responsive w-100" id="users-table" cellspacing="0">
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(function() {

        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?php echo route('encoder.data'); ?>',
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
    
    $(document).ready(function() {
        $(document).on('click', '.approve', function(){
            var id = $(this).attr("id");
            $.ajax({
                url:"<?php echo e(route('encoder.approve')); ?>",
                method:'get',
                data:{id:id},
                dataType:'json',
                success:function(data)
                {
                    console.log('success');
                    $('#users-table').DataTable().ajax.reload();
                }
            })
        });


        $(document).on('click', '.remove', function(){
            var id = $(this).attr("id");
            $.ajax({
                url:"<?php echo e(route('encoder.remove')); ?>",
                method:'get',
                data:{id:id},
                dataType:'json',
                success:function(data)
                {
                    console.log('success');
                    $('#users-table').DataTable().ajax.reload();
                }
            })
        });
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bisrat\Desktop\Laravel\blog\resources\views/encoder/index.blade.php ENDPATH**/ ?>