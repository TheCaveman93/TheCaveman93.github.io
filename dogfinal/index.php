<!DOCTYPE HTML>

<?php

    // Start the session
    session_start();

    // Defines username and password. Retrieve however you like,
    $username = "Admin";
    $password = "password";

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, refirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: success.php');
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: success.php');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!";
        }
    }
?>

<html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Furdos</title>
  
  

      <link rel="stylesheet" href="include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
      <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
     
   
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
 $(document).ready(function(){
$("#datepicker").datepicker({

  beforeShowDay: function(date)
  {

    var day = date.getDay();
    if(day==0 || day==6)
    {
      return [false];
    }
    else
            return [true];
  }});
 });
</script>

  <script type="text/javascript">
$(document).ready(function(){
    var $name=/^([a-zA-Z]{3,16})$/;
    $('.name').on('keypress keydown keyup',function(){
             if (!$(this).val().match($name)) {
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
                // else, do not display message
                $('.emsg').addClass('hidden');
               }
         });
});
</script>

</head>

<body>
          

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Furdos</a>
    </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="index.html">Home</a><span class="hover"></span></li>
       <li><a href="booking.html">Booking</a><span class="hover"></span></li>
      <li><a href="Contact.html">Contact</a><span class="hover"></span></li>
      <li><a href="index.php">Admin Login</a><span class="hover"></span></li>
      

    </ul>
  </div>
  </div>
</nav>
    <div class="container">

      <form method="post" action="index.php">
            <label for="username">Username:</label><br/>
            <input class="form-control" type="text" name="username"  placeholder="username"id="username"><br/>
            <label for="password">Password:</label><br/>
            <input class="form-control" type="password" name="password"  placeholder="password" id="password"><br/>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log In!">
        </form>

    </div> <!-- /container -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->





    <!-- Navigation 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
             Brand and toggle get grouped for better mobile display
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="login.html">About</a>
                    </li>
                    <li>
                        <a href="login.html">About</a>
                    </li>
                    <li>
                        <a href="login.html">About</a>
                    </li>
                    <li>
                        <a href="login.html">Services</a>
                    </li>
                    <li>
                        <a href="login.html">Contact</a>
                    </li>
                </ul>
            </div>
            </.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <div class="height">
   </div>
</div>
         <!--Pagination-->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Booking</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Admin Login</a>
                    </li>
                    
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <!-- /.row -->
        </footer>


    </div>




    
   
    

  


    <div>


</body>
</html>



<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>

<script  language="Javascript" type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script language="Javascript" type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script  language="Javascript" type="text/javascript" src="js/myscript.js"> </script>
 

</body>
</html>

   
    
    