<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
    body 
    {
      background-image: url('blu.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
    </style>
</head>
<body>
    <?php if(Session::has('empost_update')): ?>
    <span><h1><?php echo e(Session::get('empost_update')); ?></h1></span>
    <?php endif; ?>
                <form method="post" action="<?php echo e(route('emupdate.post')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                    <center><h2>
                    Your User ID :<br><input type="text" name="user_id" value="<?php echo e($post->user_id); ?>"><br>

                    Company Name :<br><input type="text" name="companyname" value="<?php echo e($post->companyname); ?>"><br>

                    Email :<br><input type="text" name="email" value="<?php echo e($post->email); ?>"><br>

                    Phone no :<br><input type="text" name="phone" value="<?php echo e($post->phone); ?>"><br>

                    House :<br><input type="text" name="house" value="<?php echo e($post->house); ?>"><br>

                    Road :<br><input type="text" name="road" value="<?php echo e($post->road); ?>"><br>

                    Thana :<br><input type="text" name="thana" value="<?php echo e($post->thana); ?>"><br>

                    District :<br><input type="text" name="district" value="<?php echo e($post->district); ?>"><br>                 

                    Designation :<br><input type="text" name="designation" value="<?php echo e($post->designation); ?>"><br>

                    Job Type :<br><input type="text" name="type" value="<?php echo e($post->type); ?>"><br>

                    Is this job part time or full time? :<br><input type="text" name="parttime_or_fulltime" value="<?php echo e($post->parttime_or_fulltime); ?>"><br>

                    Salary :<br><input type="text" name="salary" value="<?php echo e($post->salary); ?>"><br>

                    Your required Requirement (1) :<br><input type="text" name="r1" value="<?php echo e($post->r1); ?>"><br>

                    Your required Requirement (2) :<br><input type="text" name="r2" value="<?php echo e($post->r2); ?>"><br>

                    Your required Requirement (3) :<br><input type="text" name="r3" value="<?php echo e($post->r3); ?>"><br>

                    Working Hour :<br><input type="text" name="hour" value="<?php echo e($post->hour); ?>"><br>

                    <input type="submit" value="Submit">
                    <h2><a href="dashboardforemployer"> GO back to your Dashboard </a></h2>
                    <br>
                </h2>
                </center>

                </form>
            </body>
            </html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/emedit-post.blade.php ENDPATH**/ ?>