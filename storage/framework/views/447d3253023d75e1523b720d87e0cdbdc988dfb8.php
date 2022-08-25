<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Employer profile</title>
 
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
                <h1><left><?php echo e($data->companyname); ?> (Information)</left></h1>
                <hr>
                <left>
                <table class="table table-bordered" border="2" border color="red" cellspacing="0" cellpadding="2">
                    <tr>
                        
                        <th><h2>Your User ID</h2></th>
                        <td><center><h2><?php echo e($data->user_id); ?></h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Company Name</h2></th>
                        <td><center><h2><?php echo e($data->companyname); ?></h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Email</h2></th>
                         <td><center><h2><?php echo e($data->email); ?></h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Phone no</h2></th>
                         <td><center><h2><?php echo e($data->phone); ?></h2></center> </td>
                     </tr>

                    <tr>
                        <th><h2>House No</h2></th>
                         <td><center><h2><?php echo e($data->house); ?></h2></center></td>
                     </tr>
                     <tr>
                        <th><h2>Road No</h2></th>
                         <td><center><h2><?php echo e($data->road); ?></h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Thana</h2></th>
                         <td><center><h2><?php echo e($data->thana); ?></h2></center> </td>
                     </tr>

                     <tr>
                        <th><h2>District</h2></th>
                         <td><center><h2><?php echo e($data->district); ?></h2></center> </td>
                     </tr>

                     <tr>
                         <td colspan="2"><center><h2><a href="employerlogin">Logout</a></h2></center></td>
                     </tr>
                     <tr>
                         <td colspan="2"><center><h2><a href="dashboardforemployer">Go back to your Dashboard</a></h2></center></td>
                     </tr>
                </table>
            </left>
            

            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/emprofile.blade.php ENDPATH**/ ?>