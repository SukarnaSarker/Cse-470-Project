<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Student profile</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
body {
  background-image: url('background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 120px;">
                <h1><left>{{$data->name}} (Information)</left></h1>
                <hr>
                <left>
                <table class="table table-bordered" border="2" border color="red" cellspacing="0" cellpadding="2">
                    <tr>
                        
                        <th><h2>Your User ID</h2></th>
                        <td><center><h2>{{$data->user_id}}</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Name</h2></th>
                        <td><center><h2>{{$data->name}}</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Father's Name</h2></th>
                        <td><center><h2>{{$data->fathername}}</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Mother's Name</h2></th>
                        <td><center><h2>{{$data->mothername}}</h2></center></td>
                    </tr>

                    <tr>
                        <th><h2>Present Location</h2></th>
                         <td><center><h2>{{$data->presentaddress}}</h2></center></td>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(Village/Location)</h2></th>
                         <td><center><h2>{{$data->Village}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(Thana)</h2></th>
                         <td><center><h2>{{$data->Thana}}</h2></center> </td>
                     </tr>

                     <tr>
                        <th><h2>Permanent address(Upazilla)</h2></th>
                         <td><center><h2>{{$data->Upazila}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Permanent address(District)</h2></th>
                         <td><center><h2>{{$data->District}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Email</h2></th>
                         <td><center><h2>{{$data->email}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Phone no</h2></th>
                         <td><center><h2>{{$data->phone}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>School name where you have studied</h2></th>
                         <td><center><h2>{{$data->school}}</h2></center> </td>
                     </tr>

                     <tr>
                        <th><h2>GPA of SSC</h2></th>
                         <td><center><h2>{{$data->ssc}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>College name where you have studied</h2></th>
                         <td><center><h2>{{$data->college}}</h2></center> </td>
                     </tr>

                     <tr>
                        <th><h2>GPA of HSC</h2></th>
                         <td><center><h2>{{$data->hsc}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>University name where you have studied/studying</h2></th>
                         <td><center><h2>{{$data->university}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>CGPA</h2></th>
                         <td><center><h2>{{$data->cgpa}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>CGPA</h2></th>
                         <td><center><h2>{{$data->cgpa}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your Hobby</h2></th>
                         <td><center><h2>{{$data->h1}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your Hobby</h2></th>
                         <td><center><h2>{{$data->h2}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Current status</h2></th>
                         <td><center><h2>{{$data->studying}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(1)</h2></th>
                         <td><center><h2>{{$data->one}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(2)</h2></th>
                         <td><center><h2>{{$data->two}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(3)</h2></th>
                         <td><center><h2>{{$data->three}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Your expertise field(4)</h2></th>
                         <td><center><h2>{{$data->four}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Field you want to work</h2></th>
                         <td><center><h2>{{$data->interest}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Salary Interest</h2></th>
                         <td><center><h2>{{$data->salaryinterest}}</h2></center> </td>
                     </tr>
                     <tr>
                        <th><h2>Working Hour Interest</h2></th>
                         <td><center><h2>{{$data->workinghourinterest}}</h2></center> </td>
                     </tr>

                     <tr>
                        <th><h2>Workplace Interest</h2></th>
                         <td ><center><h2>{{$data->workplaceinterest}}</h2></center> </td>
                     </tr>
                     <tr>
                        <td colspan="2"><center><h2><a href="/edit-student/{{$data->name}}"> Edit </a></h2></center> </td>
                     </tr>

                     <tr>
                         <td colspan="2"><center><h2><a href="login">Logout</a></h2></center></td>
                     </tr>
                </table>
            </left>
            

            </div>
        </div>
    </div>
</body>
</html>