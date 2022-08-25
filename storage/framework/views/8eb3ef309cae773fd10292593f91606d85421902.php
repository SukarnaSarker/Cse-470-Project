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
    <?php if(Session::has('post_update')): ?>
    <span><h1><?php echo e(Session::get('post_update')); ?></h1></span>
    <?php endif; ?>
                <form method="post" action="<?php echo e(route('update.post')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                    <center><h2>
                    Your User ID :<br><input type="text" name="user_id" value="<?php echo e($post->user_id); ?>"><br>

                    Name :<br><input type="text" name="name" value="<?php echo e($post->name); ?>"><br>

                    Father's Name :<br><input type="text" name="fathername" value="<?php echo e($post->fathername); ?>"><br>

                    Mother's Name :<br><input type="text" name="mothername" value="<?php echo e($post->mothername); ?>"><br>

                    Present Location :<br><textarea name="presentaddress"><?php echo e($post->presentaddress); ?></textarea><br>

                    Permanent address(Village/Location) :<br><input type="text" name="Village" value="<?php echo e($post->Village); ?>"><br>

                    Permanent address(Thana) :<br><input type="text" name="Thana" value="<?php echo e($post->Thana); ?>"><br>

                    Permanent address(Upazilla) :<br><input type="text" name="Upazila" value="<?php echo e($post->Upazila); ?>"><br>

                    Permanent address(District) :<br><input type="text" name="District" value="<?php echo e($post->District); ?>"><br>

                    Email :<br><input type="text" name="email" value="<?php echo e($post->email); ?>"><br>

                    Phone no :<br><input type="text" name="phone" value="<?php echo e($post->phone); ?>"><br>

                    School name where you have studied :<br><input type="text" name="school" value="<?php echo e($post->school); ?>"><br>

                    GPA of SSC :<br><input type="text" name="ssc" value="<?php echo e($post->ssc); ?>"><br>

                    College name where you have studied :<br><input type="text" name="college" value="<?php echo e($post->college); ?>"><br>

                    GPA of HSC :<br><input type="text" name="hsc" value="<?php echo e($post->hsc); ?>"><br>

                    University name where you have studied/studying :<br><input type="text" name="university" value="<?php echo e($post->university); ?>"><br>

                    CGPA :<br><input type="text" name="cgpa" value="<?php echo e($post->cgpa); ?>"><br>

                    Your Hobby :<br><input type="text" name="h1" value="<?php echo e($post->h1); ?>"><br>

                    Add Your Hobby :<br><input type="text" name="h2" value="<?php echo e($post->h2); ?>"><br>

                    Currently Studying?(Yes/No) :<br><input type="text" name="studying" value="<?php echo e($post->studying); ?>"><br>

                    Your expertise field(1) :<br><input type="text" name="one" value="<?php echo e($post->one); ?>"><br>

                    Your expertise field(2) :<br><input type="text" name="two" value="<?php echo e($post->two); ?>"><br>

                    Your expertise field(3) :<br><input type="text" name="three" value="<?php echo e($post->three); ?>"><br>

                    Your expertise field(4) :<br><input type="text" name="four" value="<?php echo e($post->four); ?>"><br>

                    Field you want to work :<br><input type="text" name="interest" value="<?php echo e($post->interest); ?>"><br>

                    Salary Interest :<br><input type="text" name="salaryinterest" value="<?php echo e($post->salaryinterest); ?>"><br>

                    Working Hour Interest :<br><input type="text" name="workinghourinterest" value="<?php echo e($post->workinghourinterest); ?>"><br>

                    Workplace Interest :<br><input type="text" name="workplaceinterest" value="<?php echo e($post->workplaceinterest); ?>"><br>

                    <input type="submit" value="Submit">
                    <br>
                </h2>
                </center>

                </form>
            </body>
            </html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/edit-post.blade.php ENDPATH**/ ?>