<?php $__env->startSection('body'); ?>
    <h4>Página de produtos</h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current" => "produtos" ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>