<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Employee login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
body {
  background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 120px;">
                <h1><left>{{$data->name}} (Information)</left></h1>
                <hr>
                <left>
                <table class="table table-bordered" border="2" border color="red" cellspacing="0" cellpadding="10">
                    <tr>
                        
                        <th><h2>Your ID</h2></th>
                        <td><h2>{{$data->id}}</h2></td>
                    </tr>

                    <tr>
                        <th><h2>Name</h2></th>
                        <td><h2>{{$data->name}}</h2></td>
                    </tr>


                    <tr>
                        <th><h2>Email</h2></th>
                         <td><h2>{{$data->email}}</h2> </td>
                     </tr>

                     <tr>
                        <th><h2>Action</h2></th>
                         <td><h2><a href="seekerlogout">Logout</a></h2></td>
                     </tr>

                     <tr>
                        <th><h2>Action</h2></th>
                         <td><h2><a href="dashboard">Go back to your Dashboard</h2></td>
                     </tr>
                </table>
            </left>
            

            </div>
        </div>
    </div>
</body>
</html>