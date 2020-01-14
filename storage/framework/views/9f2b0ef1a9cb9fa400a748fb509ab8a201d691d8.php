<html>
    <head>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <title>Cadastro de Produtos</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
<body>
    <div class="container">
        <?php $__env->startComponent('componente_navbar', [ "current" => $current ]); ?>
        <?php echo $__env->renderComponent(); ?>
        <main role="main">
            <?php if (! empty(trim($__env->yieldContent('body')))): ?>
                <?php echo $__env->yieldContent('body'); ?>
            <?php endif; ?>
        </main>
    </div>
    
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html>