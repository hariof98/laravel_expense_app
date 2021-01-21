<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change password</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <br>
        <center><h1>Change/Update your Password</h1></center><br>
        
        <br><br><br>
        <div class="container" style="height: 650px;text-align: center;">
        <form action= "{{ route('auth.passupdate') }}" method="POST">
              {{ csrf_field() }}
          <center><table border="1" class="pure-table pure-table-bordered">
              <tr>
                <td>Old Password :</td>
                <td><input type="password" name="password" required /><br>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </td>             
             </tr>
             <tr>
              <td>New Password :</td>
                <td><input type="password" name="new_password" required /><br>
                    <span class="text-danger">@error('new_password'){{ $message }} @enderror</span>
                </td>             
             </tr>
             <tr>
                <td>Confirm New Password :</td>
                <td><input type="password" name="confirm_new_password" required /><br>
                    <span class="text-danger">@error('confirm_new_password'){{ $message }} @enderror</span>
                </td>             
             </tr>
             </table><br>
             <button type="submit" name="Submit" class="btn btn-success">Update Password</button>
          </center>
        </form>
    
</body>
</html> 
 
