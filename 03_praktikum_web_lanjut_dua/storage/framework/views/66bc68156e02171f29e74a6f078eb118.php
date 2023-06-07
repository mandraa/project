<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/fontawesome.css')); ?>">
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/templatemo-sixteen.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/owl.css')); ?>>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    

    <!-- Page Content -->
    

    <?php echo $__env->yieldContent('content'); ?>
    

    <!--Footer-->
    <footer>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
    
    <!--Footer-->


    <!-- Bootstrap core JavaScript -->
    <script src=<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>></script>
    <script src=<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>></script>


    <!-- Additional Scripts -->
    <script src=<?php echo e(asset('assets/js/custom.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/owl.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/slick.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/isotope.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/accordions.js')); ?>></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
<?php /**PATH D:\SMT 4\Pemrograman Web Lanjut\project\03_praktikum_web_lanjut_satu\resources\views/layouts/app.blade.php ENDPATH**/ ?>