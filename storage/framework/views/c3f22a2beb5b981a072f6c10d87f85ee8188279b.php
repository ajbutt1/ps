<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
<?php echo $__env->make('partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>
<body class="black-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Pakistan Stock Exchnage Real Time</h1>
            </div>
            <h3 style="margin-top: 20px">Login</h3>
           
            <form class="m-t" role="form" action="index.php">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <div class="g-signin2" data-onsuccess="onSignIn" style="padding-top: 7px;padding-bottom: 7px"></div>
                 <button type="submit" class="btn btn-primary full-width m-b" id="signout"onclick="signOut()" style="display:none;">Sign Out</button>
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/createAccount">Create an account</a>
            </form>
         
        </div>
    </div>

<!-- Default Scripts for bottom-->
<?php echo $__env->make('partials/_bodyscripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>    
</html>