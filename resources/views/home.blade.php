<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Home</title> 
   
</head>
<style>
      .home-container{
        background-color: rgb(232, 232, 198);
        height: 100%;
        
        margin-bottom: 20px;
     
      }
           
</style>

         
<body>
    @include('header')
    
   
          <div class="home-container">
          <div class="main-slider"> 
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="./images/1.jpg" >
               <div class="carousel-caption d-none d-md-block">
                 <h2>WELCOME TO ACC</h2>
               </div>
             </div>
             <div class="carousel-item">
               <img src="./images/clg-pic.jpg">
               <div class="carousel-caption d-none d-md-block">
                 <h2>WELCOME TO ACC</h2>
               </div>
             </div>
             <div class="carousel-item">
               <img src="./images/clg-pic2.jpg">
               <div class="carousel-caption d-none d-md-block">
                 <h2>WELCOME TO ACC</h2>
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </button>
          </div> 
          </div>
          </div>
          
            <!-- about principal start -->
         <div class="card-container">
            <div class="row">
              <div class="col-md-3">
                <div class="card1 shadow">
                  <div class="inner">
                  <img src="./images/card.jpg" class="card-img-top" alt="...">
                 </div>
                  <div class="card-body">
                    <h5 class="card-title"> About Principal</h5>
                    <pc class="card-text">I take the privilege to welcome all of you to the official website of Adamjee Cantonment College which is...</pc>
                    <button1 type="button" class="btn btn-link" data-toggle="modal" data-target="#staticBackdrop">
                      Read more
                    </button1>
                    </div>
                    </div>
                </div>
                    <!-- about principal end -->
                    
              <!-- Modal start -->
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
        <div class="modal-content" style="width: 140%";>
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Principal’s Messege | Brigadier General Al Faroque Siddiquee, BSP, ndu, afwc, psc.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="main-messege">
              
              <img class="pr-pic" src="./images/card.jpg">
             I take the privilege to welcome all of you to the official website of Adamjee Cantonment College which is meticulously designed to offer you vivid glimpses of the history, tradition, achievements and ongoing activities of the college. The combination of long-cherished heritage and enviable academic excellence has created a unique brand value for the institution, making it one of the top ranking and best colleges of the country. <br>
       
             Our dedicated and potential teaching staff are equipped enough to make the students well-prepared for the challenges of the ever-changing world.Adamjee Cantonment College has been crowned with many glories over the years for its substantial role in the education arena of the country. It was adjudged the best educational institution of the country in 2000. In 2014, 2015, 2016 & 2018 the college has been declared the best college among all the colleges run by Bangladesh Army.<br>
       
             In Adamjee Cantonment College, we dream together, we fight together,  we strive together and we achieve together. Here we, in the minds of the students sow the seeds of the ideal— “Enter to pursue knowledge; exit to serve the nation”. 
           </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <!-- modal end -->
         <!-- welcome messeege start-->
          <div class="col-md-5">
            <div class="welcome">
              <h5 style="margin-left: 35%; color: brown; font-style: italic;"> Welcome note </h5> 
                 <div class="welcome-note">
                Welcome to Adamjee Cantonment College.Our insanely beautiful  breathtaking campus  is just an  ideal  location  for you  to study.  Our  faculties and staffs  are  committed to offering  students a  broad  foundation  in  education. Learn more  about the people and programme of the Adamjee Cantonment College by exploring our website. <br> <br>
                Adamjee Cantonment College, one of the country’s leading institutions of learning – is an intellectual powerhouse. Since its establishment by its founder father Gul Mohammad Adamjee in 1960 , it has been successfully marching forward with a countrywide reputation of excellence in education.
               </div> 
            </div>
         </div>
                 <!-- welcome messeege end-->

                 <!-- collapse start -->
              <div class="col-md-5">
                <div id="accordion">
                  <div class="card2">
                    <div class="card-header1" id="headingOne">
                      <h5 class="mb-0">
                        <h3 class="title-collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          College history
                         
                            <i class="fa fa-sort" aria-hidden="true"></i>
                          
                        </h3>
                      </h5>
                   </div>
                 
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Founded in 1960, Adamjee Cantonment College is pledge-bound to create worthy citizens for the nation. The institution was established following the ideology and curricular activities of original renowned public school of England—Eton and Harrow. <br>  Adamjee Cantonment College is always keen to incorporate advanced technology and facilities in traditional educational system and has brought revolutionary changes in the education management of the college. 
                      </div>
                    </div>
                  </div>
                  <div class="card2">
                    
                    <div class="card-header1" id="headingTwo">
                      <h5 class="mb-0">
                        <h3 class="title-collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                         Vission & Mission <i class="fa fa-sort" aria-hidden="true"></i>
                        </h3>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                         Our vision and mission is very simple: <br>
    
                       <strong> <span style="margin-left: 3%;">“ Come here to seek knowledge and Go back to serve the country”</span></strong> <br>
                        
                        Our vision is to inculcate the sense of discipline, morality , tradition and patriotism and modern world by providing quality education.
                        Rich traditional heritage encapsulated with the opportunity of technology made our students aware about a changing world outside and led them to understand about the 21st century environment and world’s demand.
                      </div>
                    </div>
                  </div>
               </div>
               </div>
             
              

                 <!-- collapse end -->

                 <!-- notic board start -->
                 <div class="col-md-4">
                  <!-- <div id="board" style="margin-top: -430px; margin-left:440px">  -->
                     <h4 class="widget-title">
                      Notice Board
                       </h4>
                       
                     
                      <marquee class="notice-list" direction="up" height="30%";>
                    <ul>
                      <strong style="color: brown;">
                      <li>
                        1st Terminal Exam routine
                      </li> <br>
                      <li>
                        1st year quiz routine
                      </li> <br>
                      </strong>
                      <li>
                       সেনাকল্যাণ সংস্থা থেকে প্রাপ্ত বৃত্তির টাকা প্রদান প্রসঙ্গে
                      </li> <br>
                      <li>
                      একাদশ শ্রেণিতে ভর্তিকৃত ২০২২-২৩ শিক্ষাবর্ষে বৃত্তিপ্রাপ্ত <br> শিক্ষার্থীদের প্রয়োজনীয় <br> তথ্য জমা প্রসঙ্গে
                      </li>
                    </ul>
                    </marquee>
                    </div>
                    </div>
                 
                    
                    
                   
               
                     <!-- notic board end -->
                     <!-- card slider start -->
                     <div class="home-container">
                     <h3 class="mb-3" style="font-size: 18px; color: brown; margin-left: 500px; padding-top:20px";>RECENT AND UPCOMING EVENTS </h3>

                     <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                    <div class="carousel-item active"style="margin-left:44px">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card" style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/629/f11/abe/thumb_278_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2">স্বাধীনতা দিবস</h4>
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3"style="margin-left:-25px">
                                    <div class="card"style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/629/eeb/9f5/thumb_277_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2">শহীদ দিবস</h4>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3"style="margin-left:-30px">
                                    <div class="card"style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/629/ee6/2c0/thumb_276_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2">Nobin Boron - 2022</h4>
                                          
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item"style="margin-left:44px">
                            <div class="row">

                                <div class="col-md-4 mb-3" >
                                    <div class="card"style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/643/d0e/006/thumb_733_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2">পহেলা বৈশাখ ১৪৩০</h4>
                                           
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3"style="margin-left:-25px">
                                    <div class="card"style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/643/d0e/006/thumb_733_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2"> Falgun program</h4>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3"style="margin-left:-30px">
                                    <div class="card"style="width:90%">
                                    <img class="img-fluid" alt="100%x280" src="https://ndc.edu.bd/storage/app/uploads/public/62c/150/baa/thumb_557_370_240_0_0_crop.jpg">
                                        <div class="card-body2">
                                            <h4 class="card-title2">Distribute goods among the flood victims</h4>
                                           
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="col-6 text-right">
                            <a class="btn  mb-3 mr-1" style="float: left; margin-left: -44px; margin-top: 90px; background-color: rgb(177, 166, 48); color: white; border: 1px solid rgb(28, 36, 172);" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3 " style="float:right; margin-right:-572px; margin-top: 90px; background-color:rgb(177, 166, 48); ;" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                      </div>
                    </div>
                   
                    </div>
                    </div>
                    </div>
                  </div>
                
               
          
           
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" ></script>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> 
        @include('footer')
</body>
</html>    