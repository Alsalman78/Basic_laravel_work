<!DOCTYPE html>
<html>
<head>
  <title>Add Employees</title>

  
  <!-- CSS -->
       <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       

    <style type="text/css">
       body{ background-color: #F4ECF7  ;}
     </style>
</head>
<body>
   <br> <h2 style="text-align: center; font-family: 'Bitter';">Add Employees</h2> <br>
       <div class="container" >        
    <form method="post" action="{{ URL::to('store') }}">
      {{  csrf_field() }}
    <label>Name</label>
    <input type="text" class="form-control" name="name" >
    <label>Email Address</label>
    <input type="email"class="form-control" name="email" >
    <label>Salary</label>
    <input type="number" class="form-control" name="salary" >
    <label>Birth Date</label>
    <input type="date" class="form-control" name="birth_date" >
   <br><br>
    <input type="submit" value="Sign Up" class="btn btn-primary ">
   
    </form>
    
        </div>



</body>
</html>