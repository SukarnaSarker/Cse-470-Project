<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Job Seekers</title>
 
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

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
}
</style>
</head>
<body>
<h1><center>Available Seekers</center></h1>
<form action="" class="example">
	<div class="form-group">
		<input type="text" name="search" id="" class="form-control" placeholder="Search for any category" value="<?php echo e($search); ?>">
		<button type="submit"><i class="fa fa-search"></i></button>
	</div>
	</form>

<table border="3" cellpadding="10" width="100%">
	<tr>
		<td>Name</td>
		<td>Father's Name</td>
    <td>Mother's Name</td>
    <td>Present Address</td>
    <td>Permanent Address(Village)</td>
    <td>Permanent Address(Thana)</td>
    <td>Permanent Address(Upazila)</td>
    <td>Permanent Address(District)</td>
		<td>Email</td>
		<td>Phone</td>
		<td>School</td>
		<td>GPA</td>
		<td>College</td>
		<td>GPA</td>
		<td>University</td>
		<td>CGPA</td>
		<td>Hobby</td>
		<td>Hobby</td>
		<td>Current status</td>
		<td>Expertise 1</td>
		<td>Expertise 2</td>
		<td>Expertise 3</td>
		<td>Expertise 4</td>
		<td>Job interest</td>
		<td>Salary interest</td>
		<td>Working Hour Interest</td>
		<td>Working place Interest</td>	
	</tr>
	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($emp['name']); ?></td>
		<td><?php echo e($emp['fathername']); ?></td>
		<td><?php echo e($emp['mothername']); ?></td>
		<td><?php echo e($emp['presentaddress']); ?></td>
		<td><?php echo e($emp['Village,']); ?></td>
		<td><?php echo e($emp['Thana']); ?></td>
		<td><?php echo e($emp['Upazila']); ?></td>
		<td><?php echo e($emp['District']); ?></td>
		<td><?php echo e($emp['email']); ?></td>
		<td><?php echo e($emp['phone']); ?></td>
		<td><?php echo e($emp['school']); ?></td>
		<td><?php echo e($emp['ssc']); ?></td>
		<td><?php echo e($emp['college']); ?></td>
		<td><?php echo e($emp['hsc']); ?></td>
		<td><?php echo e($emp['university']); ?></td>
		<td><?php echo e($emp['cgpa']); ?></td>
		<td><?php echo e($emp['h1']); ?></td>
		<td><?php echo e($emp['h2']); ?></td>
		<td><?php echo e($emp['studying']); ?></td>
		<td><?php echo e($emp['one']); ?></td>
		<td><?php echo e($emp['two']); ?></td>
		<td><?php echo e($emp['three']); ?></td>
		<td><?php echo e($emp['four']); ?></td>
		<td><?php echo e($emp['interest']); ?></td>
		<td><?php echo e($emp['salaryinterest']); ?></td>
		<td><?php echo e($emp['workinghourinterest']); ?></td>
		<td><?php echo e($emp['workplaceinterest']); ?></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<table>
	<tr>
  <td colspan="3"><center><h2><a href="login">Logout</a></h2></center></td>
  </tr>
  <tr>
  <td colspan="3"><center><h2><a href="dashboard">Go back to your Dashboard</a></h2></center></td>
  </tr>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/seeker-list.blade.php ENDPATH**/ ?>