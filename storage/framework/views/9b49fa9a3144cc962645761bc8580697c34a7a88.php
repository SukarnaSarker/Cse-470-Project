<!DOCTYPE html>
<html lang="en">
<head>

    <title>Employer post edit</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
body {
  background-image: url('blu.jpg');
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
                        <td><center><h2>User ID can not be upgraded</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Company Name</h2></th>
                        <td><center><h2><?php echo e($data->companyname); ?></h2></center></td>
                        <td><center><h2><a href="/emedit-post/">Update your Company Name here</a></h2></center>
                    </tr>

                     <tr>
                        <th><h2>Email</h2></th>
                         <td><center><h2><?php echo e($data->email); ?></h2></center> </td>
                         <td><center><h2>Email can not be updated</h2></center>
                     </tr>
                     <tr>
                        <th><h2>Phone no</h2></th>
                         <td><center><h2><?php echo e($data->phone); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Phone no here</a></h2></center>
                     </tr>


                    <tr>
                        <th><h2>House No</h2></th>
                         <td><center><h2><?php echo e($data->house); ?></h2></center></td>
                         <td><center><h2><a href="/emedit-post/">Update your House No here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Road No</h2></th>
                         <td><center><h2><?php echo e($data->road); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Road No here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Thana</h2></th>
                         <td><center><h2><?php echo e($data->thana); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Thana here</a></h2></center>
                     </tr>


                     <tr>
                        <th><h2>District</h2></th>
                         <td><center><h2><?php echo e($data->district); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your District here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Designation</h2></th>
                         <td><center><h2><?php echo e($data->designation); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update the designation here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Job Type</h2></th>
                         <td><center><h2><?php echo e($data->type); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update the Job type here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>This job is:</h2></th>
                         <td><center><h2><?php echo e($data->parttime_or_fulltime); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Salary</h2></th>
                         <td><center><h2><?php echo e($data->salary); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update Salary here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Your requirement for seeker(1)</h2></th>
                         <td><center><h2><?php echo e($data->r1); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Your required field(1) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your requirement for seeker(2)</h2></th>
                         <td><center><h2><?php echo e($data->r2); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Your required field(2) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your requirement for seeker(3)</h2></th>
                         <td><center><h2><?php echo e($data->r3); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Your required field(3) here</a></h2></center>
                     </tr>

                        <th><h2>Required Hour</h2></th>
                         <td><center><h2><?php echo e($data->hour); ?></h2></center> </td>
                         <td><center><h2><a href="/emedit-post/">Update your Working Hour Interest here</a></h2></center>
                     </tr>
                     <tr>
                        <td colspan="3"><center><h2><a href="dashboardforemployer"> GO back to your Dashboard </a></h2></center> </td>
                     </tr>

                     <tr>
                         <td colspan="3"><center><h2><a href="employerlogin">Logout</a></h2></center></td>
                     </tr>
                </table>
            </left>
            

            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/empost-list.blade.php ENDPATH**/ ?>