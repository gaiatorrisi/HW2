

<?php $__env->startSection('head'); ?>
    <link rel='stylesheet' href="<?php echo e(url('css/stile.css')); ?>">
    <link rel='stylesheet' href="<?php echo e(url('css/account.css')); ?>">
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>        
    <a href="<?php echo e(url('home')); ?>">HOME</a>
    <a href="<?php echo e(url('gift-card')); ?>">GIFT CARD</a>
    <a href="<?php echo e(url('about')); ?>">ABOUT US</a>
    <a href="<?php echo e(url('contact-us')); ?>">CONTACT US</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
      <h1> Area personale </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <section>
    <?php if($error=='empty_fields'): ?>
    <section class='error'> ⚠ Compilare tutti i campi ⚠</section>
    <?php elseif($error=='bad_passwords'): ?>
    <section class='error'> ⚠ Password non corrispondono ⚠</section>
    <?php elseif($error=='existing'): ?>
    <section class='error'> ⚠ Nome utente già esistente ⚠</section> 
    <?php elseif($error=='logged'): ?>
    <section class='error'> ⚠ Email già registrata nel DB ⚠</section> 
    <?php endif; ?>

    <main>
        <form method='post'>
            <?php echo csrf_field(); ?>
            <label>Nome</label><br>
            <input type="text" name="nome">
            <br>

            <label>Cognome</label><br>
            <input type="text" name="cognome">
            <br>

            <label> Email</label><br>
            <input type="text" name="email">
            <br>
            <label> Username </label><br>
            <input name='username' id='username' value='<?php echo e(old("username")); ?>'>  
            <br>
            <label> Password </label> <br>
            <input type='password'name='password' id='password' value='<?php echo e(old("password")); ?>' pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,15}$" title="La password deve contenere minimo 5, massimo 15 caratteri e comprendere almeno una lettera maiuscola, una minuscola, un numero e un carattere speciale"> 
            <br>
            <label> Conferma Password </label><br><input type='password'name='conferma' id='conferma' value='<?php echo e(old("conferma")); ?>' > 
            <br>
            <label> &nbsp; <input type='submit' name="iscrizione" id="iscrizione" value='Iscriviti'> </label>
        </form>
    </main>
    
    <div id='redirect'>
        <p>Sei già iscritto?</p>
        <a href="<?php echo e(url('login')); ?>">Login </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angelo Torrisi\Desktop\XAMP\htdocs\example-HW2\resources\views/register.blade.php ENDPATH**/ ?>