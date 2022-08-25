<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Sorting JOBS</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
body {
  background-image: url('blu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

    font-family: Arial;
}
</style>
</head>
<body>
<h1><center>Available Job Posts</center></h1>


<table border="3" cellpadding="10" width="100%">
	<tr>
		<td><a href=<?php echo e(url('sorted-job-list/companyname')); ?>>Company Name</a></td>
		<td>Email</td>
		<td>Phone</td>
		<td>House No</td>
		<td>Road No</td>
		<td>Thana</td>
		<td>District</td>
		<td>Designation</td>
		<td><a href=<?php echo e(url('sorted-job-list/type')); ?>>Job Type</a></td>
		<td><a href=<?php echo e(url('sorted-job-list/parttime_or_fulltime')); ?>>This job is</a></td>
		<td><a href=<?php echo e(url('sorted-job-list/salary')); ?>>Salary</a></td>
		<td>Requirement 1</td>
		<td>Requirement 2</td>
		<td>Requirement 3</td>
		<td><a href=<?php echo e(url('sorted-job-list/hour')); ?>>Working Hour</a></td>
	</tr>
	<?php $__currentLoopData = $emposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($emp['companyname']); ?></td>
		<td><?php echo e($emp['email']); ?></td>
		<td><?php echo e($emp['phone']); ?></td>
		<td><?php echo e($emp['house']); ?></td>
		<td><?php echo e($emp['road']); ?></td>
		<td><?php echo e($emp['thana']); ?></td>
		<td><?php echo e($emp['district']); ?></td>
		<td><?php echo e($emp['designation']); ?></td>
		<td><?php echo e($emp['type']); ?></td>
		<td><?php echo e($emp['parttime_or_fulltime']); ?></td>
		<td><?php echo e($emp['salary']); ?></td>
		<td><?php echo e($emp['r1']); ?></td>
		<td><?php echo e($emp['r2']); ?></td>
		<td><?php echo e($emp['r3']); ?></td>
		<td><?php echo e($emp['hour']); ?></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<table>
	<tr>
  <td colspan="3"><center><h2><a href="employerlogin">Logout</a></h2></center></td>
  </tr>
  <tr>
  <td colspan="3"><center><h2><a href="dashboardforemployer">Go back to your Dashboard</a></h2></center></td>
  </tr>
</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/sorted-job-list.blade.php ENDPATH**/ ?>