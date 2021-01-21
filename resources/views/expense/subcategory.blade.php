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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sub Category</title>
</head>
<body>
    <div class="container" style="height: 650px;text-align: center;">
        <form action="" method="post">
          @csrf
          <hr>
          <div class="w3-container">
            <h5><b>Your Expense Stats</b></h5><br><br><br>
            
            <p>Movies</p>
            <div class="w3-grey">
              <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
            </div>
        
            <p>Food</p>
            <div class="w3-grey">
              <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
            </div>
        
            <p>Others</p>
            <div class="w3-grey">
              <div class="w3-container w3-center w3-padding w3-red" style="width:35%">35%</div>
            </div>
          </div>
          <hr>
          <a href="{{route('auth.dashboard')}}" >   Return to Dashboard</a>
 </form></div>
 
</body>
</html>