<html>
    <head>
        <?php $__env->startSection('head'); ?>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script> const BASE_URL="<?php echo e(url('/')); ?>/" </script>
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>
        <nav>
            <?php echo $__env->yieldContent('nav'); ?>
        </nav> 

        <header>
            <?php echo $__env->yieldContent('header'); ?>
        </header>
        
        <?php echo $__env->yieldContent('content'); ?>
        
    </body>
</html><?php /**PATH C:\Users\Angelo Torrisi\Desktop\XAMP\htdocs\example-HW2\resources\views/layout.blade.php ENDPATH**/ ?>