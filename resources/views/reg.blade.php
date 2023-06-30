{{-- @php 
$showAlert =false;
$showError = false;
 include 'dbconfig.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
//     echo "<pre>";
// print_r($_POST);
// echo "</pre>";
  // $exists=false;
  //username exist checking
  $existSql ="SELECT *FROM `signup` WHERE username = '$username'";
  $result= mysqli_query($db,$existSql);
  $numExistRows = mysqli_num_rows($result);

  if($numExistRows>0){
    $showError = "Username Already Exists";
  }
  else{
  if(($password==$cpassword)){
    $hash =password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `signup` (`username`, `email`, `password`,`date`) VALUES ('$username','$email','$hash',current_timestamp())";
    $result= mysqli_query($db,$sql);
    if($result){
      $showAlert = true;
      header("location: login.php");

     
    
    }

  }
  else{
    $showError = "passwords do not match.";
  }

}
}

@endphp --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
    <title>signup page</title>
  </head>
  <style>
    .container{
     margin-top: 50px;
    }
   form>.form-group{
       margin-left: 23%;
   }
   .login{
    float: right;
    margin-top: -37px;
   

   }
   .alert{
    margin-top: 55px;
   }
   
  </style>
  <body>
  
  
    @include('header')
 

  <div class="alert">
    
    {{-- @if($showAlert)
    
   
     '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'
   @endif

    @if($showError)
    
   
       '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
      
    @endif --}}
   
    <div class="container">
        <h4 class="text-center">Signup to our website</h4>
        <form id="reg-form" action="reg.php" method="post">
  <div class="form-group  col-md-6">
    <label for="username">Username</label>
    <input type="text" maxlength="15" class="form-control" id="uname" name="username">
   
  </div>
  <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password"  maxlength="20" class="form-control" id="Password" name="password">
  </div>
   <div class="form-group  col-md-6">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
     <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small>
  
  </div>
   <div class="form-group col-md-6">
   <div class="submit">
  <button type="submit" class="btn btn-primary btn-lg btn-block" >Signup</button>
  </div> 
  <span class="text">Already have an account? 
    <a href="login.php" class="tlogin">Login Now</a></span>
  


  </div>
</form>
</div>


    </div>