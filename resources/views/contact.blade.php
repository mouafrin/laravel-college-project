<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
   
    <title>Contatct Us</title>
</head>
<body>
  @include('header')

 <div class="contact-container"> 
      <div class="info" style="margin-left: 40px; font-size:15px;">
         
            <h5 style="padding-top: %;">Contact info</h5>
            <p style="font-size: 15px; color: rgb(6, 6, 28); margin-top:25px;">Adamjee Cantonment College <br>
              Dhaka Cantonment, Dhaka-1206 <br>
              Phone : 880-2-8872446 <br>
              email: info@acc.edu.bd </p>
          
            </div>

            <h4 style="color:white;background-color: rgb(2, 2, 47); width: 62.5%; padding: 2px; margin-left: 32%; margin-top: -14%; border-radius: 10px 5px 10px 5px; padding: 8px;">
              location1
            </h4> 

       
             <div class="map" style="margin-left: 32%; " >
           
            <iframe height="300px" width="650px";  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6744121108018!2d90.39066907381452!3d23.794605787080798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73d8f078209%3A0xce1bf2a261843766!2sAdamjee%20Cantonment%20College!5e0!3m2!1sen!2sbd!4v1683991219114!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
      </div>
      <br>
      <div class="form-container" style="align-items: center;">
        <h4 style="justify-content: center; display: flex; align-items: center; margin-top: 20px;">Get in Touch</h4>
        <hr style="width: 40%; border: 1px dotted black;" >

      <form>
        <div class="form-row">
          
          <div class="col">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="col">
            <input type="email" class="form-control email_phone" placeholder="Email">
          </div>
        </div>
        <div class="form-row" >
          <div class="col">
            <input type="password" class="form-control" placeholder="password">
          </div>
          <div class="col">
            <input type="text" class="form-control email_phone" placeholder="phone No">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          <textarea class="form-control" style="width: 88%; margin-left: 7%;" id="exampleFormControlTextarea1" rows="3" placeholder="something...."></textarea>
        </div>
        <div class="form-row" >
        <button type="submit" class="btn" style="background-color: rgb(32, 3, 59); color: white; margin-left: 85%;
        margin-bottom: 20px;">Submit</button></div>

      </form>
      </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> 
  @include('footer')
</body>
</html>