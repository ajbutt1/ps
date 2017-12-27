<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
           if(file_exists('registration.json'))  
           {  
                $current_data = file_get_contents('registration.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'username'=>$_POST['username'],  
                     'email' =>$_POST["email"],  
                     'password'=> $_POST["password"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('registration.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 ?>
<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
<?php echo $__env->make('partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<link href="css/plugins/iCheck/custom.css" rel="stylesheet">


</head>

<body class="black-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Real Time Stock Exchnage</h1>
            </div>
            <h3>Sign Up</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" name="registration" method="post">
                 <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="" name="username" id="username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email">  
                    <div id="emaill"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" id="password">
                  
                </div>
               
                <button type="submit" class="btn btn-primary block full-width m-b" id="submit" name="submit">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
                 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 

            </form>
          
        </div>
    </div>



<!-- Default Scripts for bottom-->
<?php echo $__env->make('partials/_bodyscripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php
    if(isset($_POST['#submit'])) {//added
    $file = "registration.json";
    $json_string = json_encode($_POST, JSON_PRETTY_PRINT);
    file_put_contents($file, $json_string, FILE_APPEND);
    header('Location: index.php'); }
?>


    <script src="js/jquery.validate.min.js" defer></script>
    <script src="js/formvalidation.js" defer></script>
 
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    <script>
    $(document).ready(function(){
        $('#submit').click(function(e) {
            var sEmail = $('#email').val();
            console.log(sEmail);
            var email_check= $('#emaill');
            if ($.trim(sEmail).length == 0) {
                email_check.text('Please enter valid email address');
                e.preventDefault();
            }
            if (validateEmail(sEmail)) {
                email_check.text('Email is valid');
            }
            else {
                email_check.text('Email address must end with @seecs.edu.pk');
                e.preventDefault();
            }

      
    });

    function validateEmail(sEmail) {
    var filter = /^[A-Za-z0-9._%+-]+@seecs.edu.pk$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

});
    </script>

</body>    
</html>