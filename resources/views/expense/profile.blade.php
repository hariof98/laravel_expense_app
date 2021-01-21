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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body><br>
 
  <div class="container" style="height: 650px;text-align: center;">
    <center><h1>Profile Details</h1></center><br>
    <form>
      @csrf
    <center><table border="1" class="pure-table pure-table-bordered">
        <tr>
          <br><br>
          <h2>  Your Name : {{$current_user->name}} </h2>
          <h2>  Your Email : {{$current_user->email}} </h2>
        <!--  <h2>  id : {{$current_user->id}} </h2>-->
        
        </tr><br>
        <h6><a href =" {{ route('auth.update') }} ">Update Password</a></h6>   <br>
        <h6><a href =" {{ route('auth.dashboard') }} ">Return to Dashboard</a></h6>   
        </tr></table></center></form>
  </div>
</body>
</html>