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
				<form action="{{route('editemployee-employeeinfo')}}" method="post">
					@if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif

					@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif
					@csrf
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
						<span class="text-danger">@error('name'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" placeholder="Enter Valid Address" name="address" value="{{old('address')}}">
						<span class="text-danger">@error('address'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="phone">Phone no</label>
						<input type="text" class="form-control" placeholder="Enter Phone No" name="phone" value="{{old('phone')}}">
						<span class="text-danger">@error('phone'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" placeholder="Enter valid email" name="email" value="{{old('email')}}">
						<span class="text-danger">@error('email'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="School">Your School</label>
						<input type="text" class="form-control" placeholder="Enter School Name" name="School" value="{{old('School')}}">
						<span class="text-danger">@error('School'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="College">Your College</label>
						<input type="text" class="form-control" placeholder="Enter College Name" name="College" value="{{old('College')}}">
						<span class="text-danger">@error('College'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="University">Your University</label>
						<input type="text" class="form-control" placeholder="Enter University Name" name="University" value="{{old('University')}}">
						<span class="text-danger">@error('University'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="CGPA">Your CGPA</label>
						<input type="text" class="form-control" placeholder="Enter CGPA" name="CGPA" value="{{old('CGPA')}}">
						<span class="text-danger">@error('CGPA'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="Father">Father's name</label>
						<input type="text" class="form-control" placeholder="Enter Your Father's Name" name="Father" value="{{old('Father')}}">
						<span class="text-danger">@error('Father'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="Mother">Mother's name</label>
						<input type="text" class="form-control" placeholder="Enter Your Mother's Name" name="Mother" value="{{old('Mother')}}">
						<span class="text-danger">@error('Mother'){{$message}} @enderror</span>
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
	</html>