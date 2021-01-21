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
<center><h1>Registration Form</h1></center><br>

<br><br><br>
<div class="container" style="height: 650px;text-align: center;background-color: white;">
    <form action="{{ route('auth.save') }}" method="POST">

      @if(Session::get('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif

      @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{ Session::get('fail') }}
      </div>
      @endif

      @csrf
  <center><table border="1" class="pure-table pure-table-bordered">
    <tr>
        <td>Name :</td>
         <td><input type="text" name="name" required>
          <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        </td>
      </tr>
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
           <center> <button type="submit" name="Submit" class="btn btn-primary">Register</button></center>
          </td>
      </tr>
    </table><br>
    <h6>Already Registered?<a href="{{ route('auth.login') }}""> Login!</a></h6>
    <h6> <a href='/'>Go to Home</a></h6>
  </center>
    </div>

</form>
</div>
</body>
</html>