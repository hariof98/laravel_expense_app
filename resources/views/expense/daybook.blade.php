<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Day Book</title>
</head>
<body>
    <div class="container" style="height: 650px;text-align: center;">
        <form action="{{ route('expense.day_book') }}" method="post">
          @csrf<br>
          <h2>Hello {{$current_user->name}},</h2>
          <h4>These are your Spendings</h4>
          <br><br><br>
      <center><table border="1" class="pure-table pure-table-bordered">
      
        <tr>
              <th>Your id </th>
              <th>Your Expense Type</th>
              <th>Expenses</th>
              <th>Mode of Payment</th>
              <th>Date</th>
              <th>Operations</th>
            </tr><br>
           
         @foreach ($expenses as $row)
         <tr>
           <td>{{$row['id']}}</td>
            <td>{{$row['type_of_expenses']}}</td>
            <td>{{$row['monthly_expense_allocation']}}</td>
            <td>{{$row['mode_of_payment']}}</td>
            <td>{{$row['date']}}</td>
            <td><b><a href={{"delete/". $row['id']}} class="btn btn-danger">Delete</a></b></td>
            
           </tr>
         @endforeach
         
          </table>
      </center><br><br>
      <b><a href="{{route('expense.addexpense')}}" class="btn btn-primary">Add Another Expense+</a></b><br><br>
      <a href="{{route('auth.dashboard')}}" >   Return to Dashboard</a>
<br><br>
    
     
     
    </form></div>


  
</body>
</html>