<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Added courses</title>
 
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
.button {
  background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #f44336;} /* Blue */

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 120px;">
                <h1><left><p style="color:red;">Courses you have added on the Cart</p></left></h1>
                <hr>
                <left>

                    @if($data->one == "Html"|| $data->two == "Html" || $data->three == "Html" || $data->four == "Html")
                    <h2><left>Recommended course : Introduction to Web Development with HTML, CSS, JavaScript(Course ID:2)</left></h2>
                    @endif

                    @if($data->one == "Canva"|| $data->two == "Canva" || $data->three == "Canva" || $data->four == "Canva")
                    <h2><left>Recommended course : Canva for Beginners(Course ID:5)</left></h2>
                    @endif

                    @if($data->one == "Power Point"|| $data->two == "Power Point" || $data->three == "Power Point" || $data->four == "Power Point")
                    <h2><left>Recommended course : Power Point for Beginners(Course ID:6)</left></h2>          @endif


                    @if($data->one == "Excel"|| $data->two == "Excel" || $data->three == "Excel" || $data->four == "Excel")
                    <h2><left>Recommended course : Ben Currier's Excel Exposure(Course ID:4)</left></h2>    
                    @endif
                    
                    @if($data->one == "Java"|| $data->two == "Java" || $data->three == "Java" || $data->four == "Java")
                    <h2><left>Recommended course : Java Programming Basics(Course ID:3)</left></h2>    
                    @endif

                    @if($data->one == "Python"|| $data->two == "Python" || $data->three == "Python" || $data->four == "Python")
                    <h2><left>Recommended course : Learn Python: The Complete Python Programming Course(Course ID:1)</left></h2>    
                    @endif

                    <button class="button"  color="red"><a href="checkout"><h4>Checkout</h4></a></button>
 
                   <h2><a href="dashboard">Go back to your Dashboard</a></h2>

            </left>

            </div>
        </div>
    </div>
</body>
</html>