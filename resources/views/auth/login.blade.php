<!DOCTYPE html>
<html>
<head>
<title>
  Login
</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><br>
   
<center><h1>Login Form</h1></center><br>

<br><br><br>
<div class="container" style="height: 650px;text-align: center;">
    <form action="{{ route('auth.check') }}" method="post">
      @csrf
  <center><table border="1" class="pure-table pure-table-bordered">
      <tr>
        <td>Email :</td>
        <td><input type="text" name="email" required /><br>
          <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="password" required><br>
          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
      </td>
      </tr>
      <tr> 
         
        <td colspan="2">
           <center> <button type="submit" name="Submit" class="btn btn-success">Login</button></center>
          </td>
      </tr>
    </table><br>
    <h6>New User? <a href="{{ route('auth.register') }}"> Register!</a></h6>
    <h6>Forgot Password? <a href="{{ route('auth.reset') }}">Reset</a></h6>
    <h6> <a href='/'>Go to Home</a></h6>
   
  </center>
    </div>

</form>
</div>
</body>
</html>