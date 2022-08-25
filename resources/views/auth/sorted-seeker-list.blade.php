<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Job Seekers</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
body {
  background-image: url('blu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

    font-family: Arial;
}
</style>
</head>
<body>
<h1><center>Available Seekers</center></h1>
<table border="3" cellpadding="10" width="10%">
	<tr>
		<td><a href={{url('sorted-seeker-list/name')}}>Name</a></td>
		<td>Father's Name</td>
    <td>Mother's Name</td>
    <td>Present Address</td>
    <td>Permanent Address(Thana)</td>
    <td>Permanent Address(Upazila)</td>
    <td>Permanent Address(District)</td>
		<td><a href={{url('sorted-seeker-list/email')}}>Email</a></td>
		<td>Phone</td>
		<td>School</td>
		<td><a href={{url('sorted-seeker-list/ssc')}}>GPA</a></td>
		<td>College</td>
		<td><a href={{url('sorted-seeker-list/hsc')}}>GPA</a></td>
		<td>University</td>
		<td><a href={{url('sorted-seeker-list/cgpa')}}>CGPA</a></td>
		<td>Hobby</td>
		<td>Hobby</td>
		<td>Current status</td>
		<td>Expertise 1</td>
		<td>Expertise 2</td>
		<td>Expertise 3</td>
		<td>Expertise 4</td>
		<td>Job interest</td>
		<td><a href={{url('sorted-seeker-list/salaryinterest')}}>Salary interest</a></td>
		<td><a href={{url('sorted-seeker-list/workinghourinterest')}}>Working Hour Interest</a></td>
		<td>Working place Interest</td>	
	</tr>
	@foreach($posts as $emp)
	<tr>
		<td>{{$emp['name']}}</td>
		<td>{{$emp['fathername']}}</td>
		<td>{{$emp['mothername']}}</td>
		<td>{{$emp['presentaddress']}}</td>
		<td>{{$emp['Thana']}}</td>
		<td>{{$emp['Upazila']}}</td>
		<td>{{$emp['District']}}</td>
		<td>{{$emp['email']}}</td>
		<td>{{$emp['phone']}}</td>
		<td>{{$emp['school']}}</td>
		<td>{{$emp['ssc']}}</td>
		<td>{{$emp['college']}}</td>
		<td>{{$emp['hsc']}}</td>
		<td>{{$emp['university']}}</td>
		<td>{{$emp['cgpa']}}</td>
		<td>{{$emp['h1']}}</td>
		<td>{{$emp['h2']}}</td>
		<td>{{$emp['studying']}}</td>
		<td>{{$emp['one']}}</td>
		<td>{{$emp['two']}}</td>
		<td>{{$emp['three']}}</td>
		<td>{{$emp['four']}}</td>
		<td>{{$emp['interest']}}</td>
		<td>{{$emp['salaryinterest']}}</td>
		<td>{{$emp['workinghourinterest']}}</td>
		<td>{{$emp['workplaceinterest']}}</td>
	</tr>
@endforeach
</table>
<table>
	<tr>
  <td ><center><h2><a href="login">Logout</a></h2></center></td>
  </tr>
  <tr>
  <td colspan="3"><center><h2><a href="dashboardforemployer">Go back to your Dashboard</a></h2></center></td>
  </tr>
</table>
</body>
</html>