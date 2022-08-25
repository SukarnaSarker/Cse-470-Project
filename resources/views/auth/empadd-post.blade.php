<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
    <style>
        body {
  background-image: url('blu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
    </style>
</head>
<body>
    @if(Session::has('emppost_add'))
    <span>{{Session::get('emppost_add')}}</span>
    @endif
                <form method="post" action="{{route('empsave.post')}}">
                    @csrf
                    <center><h2>
                    Your User ID :<br><input type="text" name="user_id" value=""><br>
                    Company Name :<br><input type="text" name="companyname" value=""><br>
                    Email :<br><input type="text" name="email" value=""><br>
                    Phone no :<br><input type="text" name="phone" value=""><br>
                    House No :<br><input type="text" name="house" value=""><br>
                    Road No :<br><input type="text" name="road" value=""><br>
                    Thana :<br><input type="text" name="thana" value=""><br>
                    District :<br><input type="text" name="district" value=""><br>
                    Designation :<br><input type="text" name="thana" value=""><br>
                    Job type :<br><input type="text" name="type" value=""><br>
                    Part Time or Full Time(Yes/No) :<br><input type="text" name="parttime_or_fulltime" value=""><br>
                    Salary :<br><input type="text" name="salary" value=""><br>
                    Requirement 1 :<br><input type="text" name="r1" value=""><br>
                    Requirement 2 :<br><input type="text" name="r2" value=""><br>
                    Requirement 3 :<br><input type="text" name="r3" value=""><br>
                    Working Hour :<br><input type="text" name="hour" value=""><br>
                    <input type="submit" value="Submit">
                    <br>
                    <a href="dashboardforemployer">Go back to your Dashboard</a>
                </h2>
                </center>

                </form>
            </body>
            </html>