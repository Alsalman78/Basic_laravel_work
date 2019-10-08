<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
     
     <!-- CSS -->
       <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">

     <!--Boostrap CDN & JS -->
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">
       body{ background-color: #F4ECF7  ;}
       a{color: black;}

     </style>
</head>

<body>
    <br> <h2 style="text-align: center; font-family: 'Bitter';">List of Employees</h2> <br>
    <div class = "container">
            <table class="table table-striped table-bordered">
        <thead>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SALARY</th>
            <th>BIRTH DATE</th>
            <th >Edit</th>
            <th>Delete</th>
            
            
        </thead>
        <tbody>
            @foreach($employees as $e)
            <tr>
                <td>{{ $e-> name }}</td>
                <td>{{ $e-> email }}</td>
                <td>{{ $e-> salary }}</td>
                <td>{{ $e-> birth_date }}</td>

                <td> 
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{ URL::to('edit/'.$e->id) }}"> Edit
                </button>

                
                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$e->id }}"> Delete
                </button>


                <div class="modal" id="{{ $e->id }}">
        <div class="modal-dialog">
       <div class="modal-content">
      
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure you want to Delete?  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">

            <a class="btn btn-danger" href="{{ URL::to('delete/'.$e->id) }}">Delete</a>
          
        </div>
        
      </div>
    </div>
   </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>         
    
            
</body>
</html>