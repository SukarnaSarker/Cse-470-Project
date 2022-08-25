<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<title>Edit your information</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
body {
  background-image: url('editt.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row"><center>
			<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
				<h2><center>Edit your information</center></h2>
				<hr>
				<form action="<?php echo e(route('posting-posting')); ?>" method="post">
					<?php if(Session::has('success')): ?>
					<div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
					<?php endif; ?>

					<?php if(Session::has('fail')): ?>
					<div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
					<?php endif; ?>
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="compayName">Company Name</label>
						<input type="text" class="form-control" placeholder="Enter Company Name" name="compayName" value="<?php echo e(old('compayName')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['compayName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" placeholder="Enter valid email" name="email" value="<?php echo e(old('email')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" placeholder="Enter Valid Address" name="address" value="<?php echo e(old('address')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="phone">Phone no</label>
						<input type="text" class="form-control" placeholder="Enter Phone No" name="phone" value="<?php echo e(old('phone')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					
					<div class="form-group">
						<label for="designation">Designation</label>
						<input type="text" class="form-control" placeholder="Enter Designation" name="designation" value="<?php echo e(old('designation')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="workingHour">Working Hour</label>
						<input type="text" class="form-control" placeholder="Enter Working Hour" name="workingHour" value="<?php echo e(old('workingHour')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['workingHour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="salary">Salary</label>
						<input type="text" class="form-control" placeholder="Enter Salary" name="salary" value="<?php echo e(old('salary')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="one">Requirement1</label>
						<input type="text" class="form-control" placeholder="Enter First requirement" name="one" value="<?php echo e(old('one')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['one'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="two">Requirement2</label>
						<input type="text" class="form-control" placeholder="Enter Second requirement" name="two" value="<?php echo e(old('two')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['two'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="three">Requirement3</label>
						<input type="text" class="form-control" placeholder="Enter Third requirement" name="three" value="<?php echo e(old('three')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['three'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="four">Requirement4</label>
						<input type="text" class="form-control" placeholder="Enter Fourth requirement" name="four" value="<?php echo e(old('four')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['three'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

					</div>
					<div class="form-group">
						<label for="five">Requirement5</label>
						<input type="text" class="form-control" placeholder="Enter Fifth requirement" name="five" value="<?php echo e(old('five')); ?>">

					</div>
					<div class="form-group">
						<label for="six">Requirement6</label>
						<input type="text" class="form-control" placeholder="Enter Sixth requirement" name="six" value="<?php echo e(old('six')); ?>">

					</div>
					<div class="form-group">
						<label for="seven">Requirement7</label>
						<input type="text" class="form-control" placeholder="Enter Seventh requirement" name="seven" value="<?php echo e(old('seven')); ?>">

					</div>
					<div class="form-group">
						<label for="eight">Requirement8</label>
						<input type="text" class="form-control" placeholder="Enter Eighth requirement" name="eight" value="<?php echo e(old('eight')); ?>">

					</div>
					<div class="form-group">
						<label for="nine">Requirement9</label>
						<input type="text" class="form-control" placeholder="Enter Ninth requirement" name="nine" value="<?php echo e(old('nine')); ?>">
					</div>
					<div class="form-group">
						<label for="ten">Requirement10</label>
						<input type="text" class="form-control" placeholder="Enter Tenth requirement" name="ten" value="<?php echo e(old('ten')); ?>">

					</div>

					<div class="form-group">
						<button class="btn btn-block btn-primary" type="submit">Submit</button>
					</div>
					<br>
					<a href="dashboard">Go back to Homepage</a>
				</form>
			</div>
		</center>
		</div>
	</div>
</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/posting.blade.php ENDPATH**/ ?>