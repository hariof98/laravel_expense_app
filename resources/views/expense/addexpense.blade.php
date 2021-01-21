<!DOCTYPE html>
<html>
<head>
<title>
  REGISTER
</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><br>
<center><h1>Add your expenses here</h1></center><br>


<br><br><br>
<div class="container" style="height: 650px;text-align: center;background-color: white;">
    <form action="{{ route('expense.add_expense') }}" method="POST">

      @csrf

      
  <center><table border="1" class="pure-table pure-table-bordered">
    <tr>
      <td>Name :</td>
       <td><input type="text" name="name" required>
        
      </td>
    </tr>
    <tr>
        <td>Monthly Salary :</td>
         <td><input type="number" name="monthly_salary" placeholder="(in rupees)" required>
          
        </td>
      </tr>
      <tr>
        <td>Monthly Expense Allocation :</td>
        <td><input type="number" name="monthly_expense_allocation" required /><br>
         
        </td>
      </tr>
      <tr>
        <td>Type of expense :
          (any 3)
        </td>
        <td><input type="text" style= "padding:20px" name="type_of_expenses" placeholder="eg: Restaurant" required ><br><br>

      </td>
      </tr>

      <tr>
        <td>Mode of Payment :</td>
        <td><input type="text" name="mode_of_payment" required /><br>
         
        </td>
      </tr>

      <tr>
        <td>Date :</td>
        <td><input type="int" name="date" required /><br>
         
        </td>
      </tr>


      <tr> 
         
        <td colspan="2">
           <center> <button type="submit" name="Submit" class="btn btn-primary">Submit</button></center>
           
          </td>
      </tr>
    </table>
    <center><a href="{{route('auth.dashboard')}}" >   Return to Dashboard</a></center>
  </center>


</form>
</div>
</body>
</html>