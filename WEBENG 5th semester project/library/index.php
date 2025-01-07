<?php
$emailmsg="";
$padmsg="";
$msg="";
$ademailmsg="";
$adpasdmsg="";
if(!empty($_REQUEST['ademailmsg'])){
  $ademailmsg=$_REQUEST['ademailmsg'];
}
if(!empty($_REQUEST['adpasdmsg'])){
  $adpasdmsg=$_REQUEST['adpasdmsg'];
}
if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}
if(!empty($_REQUEST['msg'])){
  $msg=$_REQUEST['msg'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container login-container">
      <div class="row"><h4><?php echo $msg?></h4></div>
      <div class="row">
        <div class="col-md-6 login-form-1">
         <h3>Student Login</h3>
         <form action="login_server_page.php" method="get">
          <div class="form-group">
            <input type="text" class="form-control" name="login-email" placeholder="Your Email">
          </div>
          <label style="color:red">*<?phpecho $emailmsg?></label>
          <div class="form-group">
            <input type="password" class="form-control" name="login-password" placeholder="Your Password">
            <label style="color:red">*<?phpecho $pasdmsg?></label> 
            <div class="form-group">
              <input type="Submit" class="btnSubmit" vlaue="Login">
            </div>
          </div>
         </form>
         <div class="col-md-6 login-form-2">
         <h3>Admin Login</h3>
         <form action="loginadmin_server_page.php" method="get">
          <div class="form-group">
            <input type="text" class="form-control" name="login-email" placeholder="Your Email">
          </div>
          <label style="color:red">*<?phpecho $ademailmsg?></label>
          <div class="form-group">
            <input type="password" class="form-control" name="login-password" placeholder="Your Password">
            <label style="color:red">*<?phpecho $adpasdmsg?></label> 
            <div class="form-group">
              <input type="Submit" class="btnSubmit" vlaue="Login">
            </div>
          </div>
         </form>
         </div>
      </div>
    </div>
  </body>
</html>