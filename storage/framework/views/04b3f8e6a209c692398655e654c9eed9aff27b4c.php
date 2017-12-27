<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
<?php echo $__env->make('partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="black-bg">
    
    <!-- Top Navigation Bar-->
<?php echo $__env->make('partials/_landingnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">
                    <h2 class="font-bold">Forgot password</h2>

                    <p>
                        Enter your email address and your password will be reset and emailed to you.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="landing.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address" required="">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

<!-- Default Scripts for bottom-->
<?php echo $__env->make('partials/_bodyscripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>    
</html>