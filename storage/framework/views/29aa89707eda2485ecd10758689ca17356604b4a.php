

<?php $__env->startSection('head'); ?>
    <title>Beauty Salon</title>
    <script src='<?php echo e(url("js/newsletter.js")); ?>' defer></script>
    <script src='<?php echo e(url("js/load_dinamico.js")); ?>' defer></script>
    <link rel='stylesheet' href="<?php echo e(url('css/stile.css')); ?>">
    <link rel='stylesheet' href="<?php echo e(url('css/api.css')); ?>">
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <a href="<?php echo e(url('gift-card')); ?>"> GIFT CARD </a>
    <a href="<?php echo e(url('about')); ?>"> ABOUT US </a>
    <?php if($username!=null): ?>
    <a href="<?php echo e(url('myaccount')); ?>"> <?php echo e($username); ?>'s account </a>
    <?php else: ?>
    <a href="<?php echo e(url('myaccount')); ?>"> MY ACCOUNT </a>
    <?php endif; ?>
    <a href="<?php echo e(url('contact-us')); ?>"> CONTACT US </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <h1> Beauty Team </h1>
    <div id="logo">
        <img src="logo.png">
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
 
<section>
            <div id="descrizione">
                <h1>Vieni a scoprire tutti i nostri trattamenti!</h1>
                <p>
                    Attraverso una consulenza gratutia individueremo il trattamento più idoneo alla cura dell’inestetismo.
                </p>
            </div>
            <div class="flex-container">
            
            </div>
        </section>


        <section id="NEWSLETTER">
            <form id="form_newsletter" >
                <h4>Beauty newsletter</h4>
                <p>Iscriviti alla nostra newsletter per rimanere aggiornato su tutte le nostre promo</p>  
                <input type='text'placeholder="La tua mail migliore.."id='email_input' >
                <input type='submit' id='submit' value='Ottieni i vantaggi'>              
            </form>
            <section id="box_email">
            </section>
        </section>



        <footer>
            <div class="flex-container wrap">
                <div class="flex-item">
                        <h1>Orario</h1>
                        <p> Lunedi - Sabato </br>
                        09:30 - 20:00</p>
                        <img src='11.png'>
                </div>
                <div class="flex-item">
                        <h1>Telefono</h1>
                        <p> ☏: 095123321 </br>
                            +39 3280876234
                        </p>
                        <img src='12.png'>
                </div>
                <div class="flex-item">
                        <h1>Sede</h1>
                        <p>☞Corso Bellini 78</br> Fiumefreddo di Sicilia  </p>
                        <img src='13.png'>
                </div>
            </div>
        </footer>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angelo Torrisi\Desktop\XAMP\htdocs\example-HW2\resources\views/home.blade.php ENDPATH**/ ?>