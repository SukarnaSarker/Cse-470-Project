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
                <h1><left><p style="color:red;">Courses you have added on the Cart</p></left></h1>
                <hr>
                <left>
                    <h2>Your User ID: <?php echo e($data->user_id); ?></h2>
                    <h2>Your Product ID: <?php echo e($data->product_id); ?></h2>
                    <?php if($data->product_id == "1"): ?>
                    <h2><left>Course Name: Learn Python: The Complete Python Programming Course(Course ID:1)</left></h2>

                    <?php elseif($data->product_id == "2"): ?>
                    <h2><left>Course Name: Introduction to Web Development with HTML, CSS, JavaScript(Course ID:2)</left></h2>

                    <?php elseif($data->product_id == "3"): ?>
                    <h2><left>Course Name: Java Programming Basics(Course ID:3)</left></h2>

                    <?php elseif($data->product_id == "4"): ?>
                    <h2><left>Course Name: Ben Currier's Excel Exposure(Course ID:4)</left></h2>

                    <?php elseif($data->product_id == "5"): ?>
                    <h2><left>Course Name: Canva for Beginners(Course ID:5)</left></h2>

                    <?php elseif($data->product_id == "6"): ?>
                    <h2><left>Course Name: Power Point for Beginners(Course ID:6)</left></h2>
                    
                    <?php endif; ?>

                    <button class="button"  color="red"><a href="checkout"><h4>Checkout</h4></a></button>
 
                   <h2><a href="dashboard">Go back to your Dashboard</a></h2>

            </left>

            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/addedcourses.blade.php ENDPATH**/ ?>