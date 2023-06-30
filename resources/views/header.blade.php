<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .nav-item>a{
  color: burlywood;
 }
 .navbar-brand>img{
    width:80px;
}

  </style>
    
  <header>
   
 


 <nav class="navbar navbar-expand-sm fixed-top" style="background-color: rgb(12, 2, 26);">
        <a class="navbar-brand" href="#">
            <img src="./images/mou.jpg" alt=""> <p style="margin-left: 35%; margin-top: -22%; font-size: 25px; font-style: oblique; color: burlywood;"> Adamjee Cantonment College</p>  <br>
           
        </a>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}" target ="_blank ">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Gallery
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('/photo')}}">Photo</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Student
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{url('/display')}}">Student</a>
                 
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
           
              <li class="nav-item">
              <a class="nav-link" href="{{url('/reg')}}">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">login</a>
            </li>
            
           
            
         </ul>
        </div>
      </nav>
    

</header>
</body>
</html>