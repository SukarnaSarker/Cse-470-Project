<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
   body {
  background-image: url('img.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
	<div style="height:900px">
	<div class="container">
		<div class="row"><center>
			<div class="col-md-4 col-md-offset-4" style="margin-top:150px;">
				<h4><center><b>Employee Registration</b></h4>
				<hr>
				<form action="http://localhost:8000/register-user" method="post"><center>
					<?php if(Session::has('success')): ?>
					<div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
					<?php endif; ?>

					<?php if(Session::has('fail')): ?>
					<div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
					<?php endif; ?>

					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="name"><b>Full Name</b></label>
						<input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="<?php echo e(old('name')); ?>">
						<span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<label for="email"><b>Email</b></label>
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
						<label for="password"><b>Password</b></label>
						<input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
						<span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
					</div>
					<div class="form-group">
						<button class="btn btn-block btn-primary" type="submit">Register</button>
					</div>
					<br>
					<a href="login"><b>Already Registered?Login Here</b></a>
				</form>
			</center>
		</form>
	</center>
</h4>
</div>
</center>
</div>
</div>
</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/Registration.blade.php ENDPATH**/ ?>