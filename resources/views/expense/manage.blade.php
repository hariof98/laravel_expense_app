<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage your expenses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    <body class="w3-light-grey">
    
<form action="{{ route('expense.manager') }}" method="POST">
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container w3-row">
       
        <div class="w3-col s8 w3-bar">
          <span>Welcome, <b>{{$current_user->name}}</b><strong></strong></span><br>
          <a href="{{ route('expense.profile') }}" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
         
        </div>
      </div>
      <hr>
      <div class="w3-container">
        <h5>Dashboard</h5>
      </div>
      <div class="w3-bar-block">
      
        <a href="{{route('expense.manage')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>   Overview</a>
        <a href="{{route('auth.dashboard')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-backward"></i>   Return to Dashboard</a>
        <style>

            .dropdown-content {
              display: none;
              position: absolute;
              min-width: 160px;      
              padding: 12px 16px;   
              z-index: 1;
            }
            
            .dropdown:hover .dropdown-content {
              display: block;
            }
            </style>
            <div class="dropdown">
                <span> <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>   Settings</a><br><br></span>
                <div class="dropdown-content">
                <p><a href =" {{ route('auth.login') }} ">Logout</a></p>
                </div>
      
      </div></div>
    </nav>
    
    
    
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    
      <!-- Header -->
      @foreach ($expenses as $row)
      <header class="w3-container" style="padding-top:22px">
        <h5><b> <b>{{$current_user->name}}'s</b> Dashboard</b></h5>
      </header>
    
      <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
          <div class="w3-container w3-green w3-padding-16">
            <div class="w3-left"><i class="fa  w3-xxxlarge"></i></div>
            <div class="w3-right">
          
            </div>
            <div class="w3-clear"></div>
            <h4>Your Income : {{$row['monthly_salary']}} ₹</h4>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa"></i></div>
            <div class="w3-right">
           
            </div>
            <div class="w3-clear"></div>
            <h4>Your Expense : {{$row['monthly_expense_allocation']}} ₹</h4>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa"></i></div>
            <div class="w3-right">
        
            </div>
            <div class="w3-clear"></div>
            <h4>Your Balance : <?php echo $row['monthly_salary'] - $row['monthly_expense_allocation']; ?> </td> ₹</h4>
          </div>
        </div>
        
    @endforeach
      </div></div></form>
    
    </body>
    
</html>