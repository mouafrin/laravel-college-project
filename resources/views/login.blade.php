
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>login</title>
  </head>
  <style>
   form>.form-group{
       margin-left: 23%;
   }
   .alert{
    margin-top: 55px;
   }
   .container{
     margin-top: 130px;
    }
  </style>
  <body>
    @include('header')
 
    </div>
    <div class="container">
        <h4 class="text-center">login to our website</h4>
        <form action="login.php" method="post">
  <div class="form-group  col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="uname" name="username">
   
  </div>
  
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  
  <div class="form-group  col-md-6">
   <div class="submit">
  <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
  </div>
  </div>
  <div class="form-group  col-md-6">
  <span class="text">Didn't  have an account? 
    <a href="reg.php" class="tlogin">signup Now</a></span>
  </div>
 </form>
 </div>
 
 
 
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
   

   
  </body>
</html>