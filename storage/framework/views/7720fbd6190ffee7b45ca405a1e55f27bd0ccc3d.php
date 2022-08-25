<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student profile</title>
 
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
                <h1><left><?php echo e($data->name); ?> (Information)</left></h1>
                <hr>
                <left>
                <table class="table table-bordered" border="2" border color="red" cellspacing="0" cellpadding="2">
                    <tr>
                        
                        <th><h2>Your User ID</h2></th>
                        <td><center><h2><?php echo e($data->user_id); ?></h2></center></td>
                        <td><center><h2>User ID can not be upgraded</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Name</h2></th>
                        <td><center><h2><?php echo e($data->name); ?></h2></center></td>
                        <td><center><h2><a href="/edit-post/">Update your Name here</a></h2></center>
                    </tr>

                    <tr>
                        <th><h2>Father's Name</h2></th>
                        <td><center><h2><?php echo e($data->fathername); ?></h2></center></td>
                        <td><center><h2><a href="/edit-post/">Update your Father's Name here</a></h2></center>
                    </tr>

                    <tr>
                        <th><h2>Mother's Name</h2></th>
                        <td><center><h2><?php echo e($data->mothername); ?></h2></center></td>
                        <td><center><h2><a href="/edit-post/">Update your Mother's Name here</a></h2></center>
                    </tr>

                    <tr>
                        <th><h2>Present Location</h2></th>
                         <td><center><h2><?php echo e($data->presentaddress); ?></h2></center></td>
                         <td><center><h2><a href="/edit-post/">Update your Present Location here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(Village/Location)</h2></th>
                         <td><center><h2><?php echo e($data->Village); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Village/Location here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(Thana)</h2></th>
                         <td><center><h2><?php echo e($data->Thana); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Thana here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Permanent address(Upazilla)</h2></th>
                         <td><center><h2><?php echo e($data->Upazila); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Upazilla here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(District)</h2></th>
                         <td><center><h2><?php echo e($data->District); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your District here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Email</h2></th>
                         <td><center><h2><?php echo e($data->email); ?></h2></center> </td>
                         <td><center><h2>Email can not be updated</h2></center>
                     </tr>
                     <tr>
                        <th><h2>Phone no</h2></th>
                         <td><center><h2><?php echo e($data->phone); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Phone no here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>School name where you have studied</h2></th>
                         <td><center><h2><?php echo e($data->school); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your School name here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>GPA of SSC</h2></th>
                         <td><center><h2><?php echo e($data->ssc); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your GPA here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>College name where you have studied</h2></th>
                         <td><center><h2><?php echo e($data->college); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your College name here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>GPA of HSC</h2></th>
                         <td><center><h2><?php echo e($data->hsc); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your GPA here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>University name where you have studied/studying</h2></th>
                         <td><center><h2><?php echo e($data->university); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your University name here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>CGPA</h2></th>
                         <td><center><h2><?php echo e($data->cgpa); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your CGPA here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your Hobby</h2></th>
                         <td><center><h2><?php echo e($data->h1); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Hobby here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your Hobby</h2></th>
                         <td><center><h2><?php echo e($data->h2); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Hobby here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Current status</h2></th>
                         <td><center><h2><?php echo e($data->studying); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Current status here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(1)</h2></th>
                         <td><center><h2><?php echo e($data->one); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Your expertise field(1) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(2)</h2></th>
                         <td><center><h2><?php echo e($data->two); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Your expertise field(2) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(3)</h2></th>
                         <td><center><h2><?php echo e($data->three); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Your expertise field(3) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(4)</h2></th>
                         <td><center><h2><?php echo e($data->four); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Your expertise field(4) here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Field you want to work</h2></th>
                         <td><center><h2><?php echo e($data->interest); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your working field here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Salary Interest</h2></th>
                         <td><center><h2><?php echo e($data->salaryinterest); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Salary Interest here</a></h2></center>
                     </tr>
                     <tr>
                        <th><h2>Working Hour Interest</h2></th>
                         <td><center><h2><?php echo e($data->workinghourinterest); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Working Hour Interest here</a></h2></center>
                     </tr>

                     <tr>
                        <th><h2>Workplace Interest</h2></th>
                         <td ><center><h2><?php echo e($data->workplaceinterest); ?></h2></center> </td>
                         <td><center><h2><a href="/edit-post/">Update your Workplace Interest here</a></h2></center>
                     </tr>
                     <tr>
                        <td colspan="3"><center><h2><a href="/edit-student/<?php echo e($data->name); ?>"> Edit </a></h2></center> </td>
                     </tr>

                     <tr>
                        <td colspan="3"><center><h2><a href="dashboard"> GO back to your Dashboard </a></h2></center> </td>
                     </tr>

                     <tr>
                         <td colspan="3"><center><h2><a href="login">Logout</a></h2></center></td>
                     </tr>
                </table>
            </left>
            

            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/post-list.blade.php ENDPATH**/ ?>