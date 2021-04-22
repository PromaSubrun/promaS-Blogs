<?php if(null !== session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(null !== session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?><?php /**PATH E:\Project\PromaS Blogs\resources\views/inc/messages.blade.php ENDPATH**/ ?>