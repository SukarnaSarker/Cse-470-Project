<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student CV Update</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
body {
  background-image: url('mantra.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

p.ex1 {
  margin: 350px 700px;
}

</style>
</head>
<body>
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
                <form method="post" action="{{route('save.p')}}">
                    @csrf
                    <left><h2>
                    <p style="color:white;margin: 20px 420px;">
                    Your User ID :<br><input type="text" name="user_id" value=""></p><br>
                    <p style="color:white;margin: 20px 420px;">
                    Name :<br><input type="text" name="name" value=""></p><br>
                    <p style="color:white;margin: 20px 420px;">
                    Email :<br><input type="text" name="email" value=""></p><br>
                    <p style="color:white;margin: 20px 420px;">
                    Portfolio Link :<br><input type="text" name="link" value=""></p><br>
                    <p style="color:white;margin: 20px 450px;">
                    <input type="submit" value="Submit"></p>
                    <br>
                    <p style="color:white;margin: 20px 390px;">
                    <a href="dashboard">Go back to your Dashboard</a></p>
                </h2>
                </left>

                </form>
            </body>
            </html>

