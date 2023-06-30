                   
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
       
       <title>view page</title>
  </head>
  <style>
    .container{
      margin-top: 140px;
    }
    .card-header{
     background-color: #C39BD3;
     color: white;
    }
    .form-control:disabled, .form-control[readonly] {
      background-color: white;
    }
    
    
  
  </style>
  <body>
  <div class="container">  
        <div class="card">
          <div class="card-header">
            Personal Information
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticname" class="col-sm-4 col-form-label">Name</label>
        
      
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticname" disabled value= "{{$students->name}}">
          </div>
        </div>
        </div>
       
        <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Date of Birth :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticdobl" disabled value="{{$students->date_of_birth}}">
          </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticfname" class="col-sm-4 col-form-label">Father's Name :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticfname" disabled value="{{$students->fathers_name}}">
          </div>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticoccp" class="col-sm-4 col-form-label">Father's Occupation : </label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="staticoccp" disabled value="{{$students->fathers_occupation}}">
          </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Gender :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticgender" disabled value="{{$students->gender}}">
          </div>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticmbl" class="col-sm-4 col-form-label">Mobile :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticmbl" disabled value="{{$students->mobile}}">
          </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticaddress" class="col-sm-4 col-form-label">Address :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticaddress" disabled value="{{$students->address}}">
          </div>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Email :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" disabled value="{{$students->email}}">
          </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticdistrict" class="col-sm-4 col-form-label">District :</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticdistrict" disabled value="{{$district->name}}">
          </div>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticthana" class="col-sm-4 col-form-label">Thana :</label>
          <div class="col-sm-8">
           
                          
            <input type="text" readonly class="form-control-plaintext" id="staticthana" disabled value="{{$thana->name}}">

          </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
          <div class="form-group row">
          <label for="staticpic" class="col-sm-4 col-form-label">Profile picture :</label>
          <div class="col-sm-8">
            <img src="http://localhost/PHP/project/images/{{$students->profile_pic}}" style="height:200px; width:300px;">

          </div>
        </div>
        </div>
            </div>
            </div>
            </div>

            
            <div class="card" style="margin-top:20px;">
              <h5 class="card-header">Educational Information</h5>
               <div class="card-body">
             <div class="form-row">

              <table class="table" style="width:130%;" id="tb" >
               <thead>
                 <tr id="row0">
                   <th scope="col">Institution name</th>
                   <th scope="col">Degree</th>
                   <th scope="col">Passing Year</th>
                   <th scope="col">Result</th>
                   </tr>
                 </thead>
                
<tbody>


  @foreach($education as $info)
  <tr>
      <td>{{ $info->institution_name }}</td>
      <td>{{ $info->degree }}</td>
      <td>{{ $info->passing_year }}</td>
      <td>{{ $info->result }}</td>
  </tr>
  @endforeach
 </tbody>
           </table>
               </div>
             </div>
             </div>
             <div class="card" style="margin-top:20px;">
              <h5 class="card-header">Declaration</h5>
               <div class="card-body">
                 <div class="row">
               <label for="staticsig" class="col-sm-2 col-form-label">Signature :</label>
           <div class="col-sm-8">
          <img src="http://localhost/PHP/project/images/{{$students->signature}}" style="height:80px; width:300px;">
                </div>
               </div> <br>
               <div class="form-check">
                @php
                    
                     $isChecked = ($students->accept_terms == 1) ? 'checked' : '';
                     @endphp
              
             
                  <input readonly class="form-check-input" type="checkbox" disabled {{$isChecked}} id="Check1">
                       <label class="form-check-label" for="defaultCheck1">
                         I do here by declare that the information given avobe is true.
                         
                       </label>
                     </div>
                 </div>
                 </div>
                 </div>
             





          </body>
          </html>
      