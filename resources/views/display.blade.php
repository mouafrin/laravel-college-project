
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>view page - </title>
</head>
<style>
    .container{
        margin-left: 50px;
        margin-top: 11%;
    }

    
    
</style>

   
<body>

    @include('header')


<div class="container">
    

{{-- <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome !</h4>
  <p>you're successfully logged in this page.
 

</div> --}}

<a href="{{url('/studentform')}}" class="btn btn-info" role="button" style="float:right">Add Student</a>

<table id="data-table" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                 <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>email</th>
                <th>view</th>
                <th>Edit</th>
                <th>Delete</th>



                 </tr>
        </thead>
      
          <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->email}}</td>
                <td><a href="{{url('/studentView',['viewid' => $student['id']]) }}" class="btn btn-primary">View</a></td>
                <td><a href="{{url('/studentEdit',['editid' => $student['id']])}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('/studentDelete')}}" class="btn btn-danger">Delete</a></td>

             </tr>   
             @endforeach
        
   
    </tbody>
    </table>
        </div>
        <script>
    $(document).ready(function() {
        $('#data-table').DataTable();
    });
    </script>
      
        
    </body>
    </html>