<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'DBS')); ?></title>

    <?php echo $__env->make('layouts.navbar.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.library.master-library', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2">
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>
                    <div class="list-group">
                        <?php if(Auth::user()->userTypeId == 3): ?>
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks Customer </strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Item List
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Suggestion list</button>
                            <button type="button" class="list-group-item list-group-item-action">Notification</button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                            <button type="button" class="list-group-item list-group-item-action" >Wish List / Add wish list</button>
                            <button type="button" class="list-group-item list-group-item-action" >Update timeline</button>
                            <button type="button" class="list-group-item list-group-item-action" >Report Scam broker</button>
                            <button type="button" class="list-group-item list-group-item-action" >Rating broker</button>
                        <?php endif; ?>
                        <?php if(Auth::user()->userTypeId == 2): ?>
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks broker</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Item List
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Suggestion list</button>
                            <button type="button" class="list-group-item list-group-item-action">Notification</button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled>Wish List</button>
                        <?php endif; ?>
                        <?php if(Auth::user()->userTypeId == 1): ?>
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks Company</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Post list
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                        <?php endif; ?>
                        <?php if(Auth::user()->userTypeId == 5): ?>
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Admin Tasks</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Usage status
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">show rate of company</button>
                            <button type="button" class="list-group-item list-group-item-action">Manage Encoder</button>
                            <button type="button" class="list-group-item list-group-item-action">Manage Scam broker</button>
                        <?php endif; ?>
                        <?php if(Auth::user()->userTypeId == 4): ?>
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Encoder Tasks</strong>
                            </button>
                        <a href="<?php echo e(route('encoder')); ?>" type="button" class="list-group-item list-group-item-action ">
                                Manage users
                            </a>
                        <?php endif; ?>
                        
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-md-8 mb-5 ml-5">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

</body>

<?php echo $__env->yieldPushContent('scripts'); ?>

</html><?php /**PATH C:\Users\Bisrat\Desktop\Laravel\blog\resources\views/layouts/master.blade.php ENDPATH**/ ?>