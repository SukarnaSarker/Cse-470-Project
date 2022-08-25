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
    @if(Session::has('post_update'))
    <span><h1>{{Session::get('post_update')}}</h1></span>
    @endif
                <form method="post" action="{{route('update.post')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <center><h2>
                    Your User ID :<br><input type="text" name="user_id" value="{{$post->user_id}}"><br>

                    Name :<br><input type="text" name="name" value="{{$post->name}}"><br>

                    Father's Name :<br><input type="text" name="fathername" value="{{$post->fathername}}"><br>

                    Mother's Name :<br><input type="text" name="mothername" value="{{$post->mothername}}"><br>

                    Present Location :<br><textarea name="presentaddress">{{$post->presentaddress}}</textarea><br>

                    Permanent address(Village/Location) :<br><input type="text" name="Village" value="{{$post->Village}}"><br>

                    Permanent address(Thana) :<br><input type="text" name="Thana" value="{{$post->Thana}}"><br>

                    Permanent address(Upazilla) :<br><input type="text" name="Upazila" value="{{$post->Upazila}}"><br>

                    Permanent address(District) :<br><input type="text" name="District" value="{{$post->District}}"><br>

                    Email :<br><input type="text" name="email" value="{{$post->email}}"><br>

                    Phone no :<br><input type="text" name="phone" value="{{$post->phone}}"><br>

                    School name where you have studied :<br><input type="text" name="school" value="{{$post->school}}"><br>

                    GPA of SSC :<br><input type="text" name="ssc" value="{{$post->ssc}}"><br>

                    College name where you have studied :<br><input type="text" name="college" value="{{$post->college}}"><br>

                    GPA of HSC :<br><input type="text" name="hsc" value="{{$post->hsc}}"><br>

                    University name where you have studied/studying :<br><input type="text" name="university" value="{{$post->university}}"><br>

                    CGPA :<br><input type="text" name="cgpa" value="{{$post->cgpa}}"><br>

                    Your Hobby :<br><input type="text" name="h1" value="{{$post->h1}}"><br>

                    Add Your Hobby :<br><input type="text" name="h2" value="{{$post->h2}}"><br>

                    Currently Studying?(Yes/No) :<br><input type="text" name="studying" value="{{$post->studying}}"><br>

                    Your expertise field(1) :<br><input type="text" name="one" value="{{$post->one}}"><br>

                    Your expertise field(2) :<br><input type="text" name="two" value="{{$post->two}}"><br>

                    Your expertise field(3) :<br><input type="text" name="three" value="{{$post->three}}"><br>

                    Your expertise field(4) :<br><input type="text" name="four" value="{{$post->four}}"><br>

                    Field you want to work :<br><input type="text" name="interest" value="{{$post->interest}}"><br>

                    Salary Interest :<br><input type="text" name="salaryinterest" value="{{$post->salaryinterest}}"><br>

                    Working Hour Interest :<br><input type="text" name="workinghourinterest" value="{{$post->workinghourinterest}}"><br>

                    Workplace Interest :<br><input type="text" name="workplaceinterest" value="{{$post->workplaceinterest}}"><br>

                    <input type="submit" value="Submit">
                    <br>
                </h2>
                </center>

                </form>
            </body>
            </html>