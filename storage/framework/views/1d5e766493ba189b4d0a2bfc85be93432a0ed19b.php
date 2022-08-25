<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Added courses</title>
 
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
.button {
  background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #f44336;} /* Blue */

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 120px;">
                <h1><left><p style="color:red;">Bookmarked Posts</p></left></h1>
                <hr>
                    <p>
                        <h3>1</h3>
                        Company Name :<?php echo e($data->companyname); ?><br>
                        Email : <?php echo e($data->email); ?><br>
                        Phone : <?php echo e($data->phone); ?><br>
                        House No : <?php echo e($data->house); ?><br>
                        Road No: <?php echo e($data->road); ?><br>
                        Designation :<?php echo e($data->designation); ?><br>
                        Job Type : <?php echo e($data->type); ?><br>
                        This is a <?php echo e($data->parttime_or_fulltime); ?> job.<br>
                        Salary : <?php echo e($data->salary); ?><br>
                        Requirements :<?php echo e($data->r1); ?>, <?php echo e($data->r2); ?>,<?php echo e($data->r3); ?><br>
                        You have to wwork for <?php echo e($data->hour); ?> hours<br>
                       <h2><a href="dashboardforemployer"> GO back to your Dashboard </a></h2>                      
                  </p>

            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/bookmark.blade.php ENDPATH**/ ?>