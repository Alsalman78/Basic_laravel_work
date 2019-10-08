<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <!-- CSS -->
       <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <style type="text/css">
       body{ background-color: #F4ECF7  ;}
     </style>
</head>
<body>
  <br><h2 style="text-align: center; font-family: 'Bitter';"> Edit Employees </h2><br>
  
      <div class="container">    
    <form method="post" action="{{ URL::to('update/'.$employee->id) }}">
      {{  csrf_field() }}
    <label>Name</label>
    <input type="text" name="name" class="form-control"  value="{{$employee->name}}">
    <label>Email Address</label>
    <input type="email" name="email" class="form-control"   value="{{$employee->email}}">
    <label>Salary</label>
    <input type="number" name="salary" class="form-control"  value="{{$employee->salary}}">
    <label>Birth Date</label>
    <input type="date" name="birth_date" class="form-control"  value="{{$employee->birth_date}}">
     
    <br><br>
    <input type="submit" value="Update" class="btn btn-primary ">
    </form>
     </div>
    </div>
       <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
       <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>