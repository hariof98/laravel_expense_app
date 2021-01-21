<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
     
  <form action= "{{ route('auth.profileview') }}" method="POST">
<div class= "">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-nav">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Expense Manager App</a>
          </div>
          <a class="nav-item nav-link active" href="#">Main Category <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{ route('expense.subcategory') }}">Sub Category</a>
          <a class="nav-item nav-link" href="{{ route('expense.daybook')}}">Day Book</a>
          <a class="nav-item nav-link" href="{{route('expense.manage')}}">Budgeting and Balance</a>
        <!--  <a class="nav-item nav-link" href="{{ route('expense.profile') }}" style="float: right ">Profile</a>-->
         
        </div>
        <ul class="nav navbar-nav navbar-right">
          <a class="nav-item nav-link" href="{{ route('expense.profile') }}" style="float: right ">Welcome {{$current_user->name}}</a>
        </ul>
      </div>
      </nav> 
      <h5 style="float: right"><a href =" {{ route('auth.logout') }} ">Logout</a></h5>  

    
      </div>
      <center> <table class="table">
        <br><table  border="1" class="pure-table pure-table-bordered"> <!--*****-->

            <tr><br><br><br><br><br><br>
                <td><b><a href="{{route('expense.addexpense')}}" class="btn btn-success">Add New Expense</a></b></td>
                <td><b><a href="{{route('expense.manage')}}" class="btn btn-primary">Manage Your Expenses</a></b></td>
              
            </tr>
    </table><center>

    </form>
    
</body>
</html>