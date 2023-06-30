<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
   
   
    <title>Photos</title>
</head>
<body>
    @include('header')
 
 
   <div class="gallery-container">
  <div class="gallery">
      
       <a href="./images/1.jpg">
        <img src="./images/1.jpg"  alt="">
        </a>
        <a href="./images/15.jpg">
       <img src="./images/15.jpg"  alt="" >
       </a>
        <a href="./images/13.jpg">
       <img src="./images/13.jpg"  alt="">
       </a>
        <a href="./images/12.jpg">
       <img src="./images/12.jpg" alt="">
       </a>
        <a href="./images/8.jpg">
       <img src="./images/8.jpg" alt="">
       </a>
        <a href="./images/9.jpg">
       <img src="./images/9.jpg" alt="">
       </a>
        <a href="./images/7.jpg">
       <img src="./images/7.jpg"  alt="">
       </a>
        <a href="./images/11.jpg">
       <img src="./images/11.jpg" alt="">
       </a>
        <a href="./images/14.jpg">
       <img src="./images/14.jpg" alt="">
       </a>
       <a href="./images/5.jpg">
        <img src="./images/5.jpg" alt="">
        </a>
    </div>
  </div>
 
 

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
 <script>
    lightGallery(document.querySelector(".gallery"));
 </script>
  @include('footer')
</body>
</html>