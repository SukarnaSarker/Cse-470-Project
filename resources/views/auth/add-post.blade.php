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
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
                <form method="post" action="{{route('save.post')}}">
                    @csrf
                    <center><h2>
                    Your User ID :<br><input type="text" name="user_id" value=""><br>
                    Name :<br><input type="text" name="name" value=""><br>
                    Father's Name :<br><input type="text" name="fathername" value=""><br>
                    Mother's Name :<br><input type="text" name="mothername" value=""><br>
                    Present Location :<br><textarea name="presentaddress"></textarea><br>
                    Permanent address(Village/Location) :<br><input type="text" name="Village" value=""><br>
                    Permanent address(Thana) :<br><input type="text" name="Thana" value=""><br>
                    Permanent address(Upazilla) :<br><input type="text" name="Upazila" value=""><br>
                    Permanent address(District) :<br><input type="text" name="District" value=""><br>
                    Email :<br><input type="text" name="email" value=""><br>
                    Phone no :<br><input type="text" name="phone" value=""><br>
                    School name where you have studied :<br><input type="text" name="school" value=""><br>
                    GPA of SSC :<br><input type="text" name="ssc" value=""><br>
                    College name where you have studied :<br><input type="text" name="college" value=""><br>
                    GPA of HSC :<br><input type="text" name="hsc" value=""><br>
                    University name where you have studied/studying :<br><input type="text" name="university" value=""><br>
                    CGPA :<br><input type="text" name="cgpa" value=""><br>
                    Your Hobby :<br><input type="text" name="h1" value=""><br>
                    Add Your Hobby :<br><input type="text" name="h2" value=""><br>
                    Currently Studying?(Yes/No) :<br><input type="text" name="studying" value=""><br>
                    Your expertise field(1) :<br><input type="text" name="one" value=""><br>
                    Your expertise field(2) :<br><input type="text" name="two" value=""><br>
                    Your expertise field(3) :<br><input type="text" name="three" value=""><br>
                    Your expertise field(4) :<br><input type="text" name="four" value=""><br>
                    Field you want to work :<br><input type="text" name="interest" value=""><br>
                    Salary Interest :<br><input type="text" name="salaryinterest" value=""><br>
                    Working Hour Interest :<br><input type="text" name="workinghourinterest" value=""><br>
                    Workplace Interest :<br><input type="text" name="workplaceinterest" value=""><br>

                    <input type="submit" value="Submit">
                    <br>
                    <a href="dashboard">Go back to your Dashboard</a>
                </h2>
                </center>

                </form>
            </body>
            </html>