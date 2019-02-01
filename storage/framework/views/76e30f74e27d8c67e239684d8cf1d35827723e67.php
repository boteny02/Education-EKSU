 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Faculty Of Education Library</title>

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="<?php echo e(asset('assets/js/Chart.min.js')); ?>"></script>
		<script src="<?php echo e(asset('/js/main.js')); ?>"></script>

    <!-- favicon -->
    <link rel="icon" type="image/jpg" href="assets/img/favicon.jpg" />
    <link href="<?php echo e(asset('/css/pack.css')); ?>" rel="stylesheet" />
</head>
<body>
   
    <div class="wrapper">
        <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="content">
                <div class="container-fluid">                    
                <?php echo $__env->yieldContent('content'); ?>         
                </div>
            </div>
        </div>        
   </div>
<script src="<?php echo e(asset('/js/pack.js')); ?>" type="text/javascript"></script>

</body>
</html>