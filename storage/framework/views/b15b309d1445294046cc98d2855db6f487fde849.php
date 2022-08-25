<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
</head>
<body>
                <?php if(Session::has('data_update')): ?>
                <span><?php echo e(Session::get('data_update')); ?></span>
                <?php endif; ?>
                <form method="post" action="<?php echo e(route('update.data')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                    Name : <br><input type="text" name="name" value="<?php echo e($data->name); ?>"><br>
                    Phone : <br><input type="text" name="phone" value="<?php echo e($data->phone); ?>"><br>
                    <input type="submit" value="Submit">
                </form>
            </body>
            </html>



<?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/edit-student.blade.php ENDPATH**/ ?>