<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="http://localhost/project/search/jobSearch.php">Search for a job</a>
  <a href="http://localhost/project/applicant/skillSet/skillRegister.php">Add Skills</a>
  <a href="http://localhost/project/applicant/userInfo/skillInfo.php">Press to see your skill set</a>
  <a href="http://localhost/project/applicant/userInfo/application.php">Check your job staus</a>
  <a href="#">Apply for a job</a>

t</div>



</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
   
    
    <title>User Info</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-0" style="margin-top: 7%;">
                <div class="row">

                    <?php
                    $connection = mysqli_connect('localhost','root','','laravel');

                    session_start();
                    $searchKey = $_SESSION['email'];
                    
                    $sql="select * from EMPLOYERS where email ='$searchKey'" ;
                
                
                $result = mysqli_query($connection, $sql);
                ?>

                
                

                <br>
                <br>
                </div>

           
                    <?php while ($row = mysqli_fetch_object($result)) {
                    ?>


                 <p><h2>User Information :</h2></p>

                <table class="table table-bordered">
                    

                    <tr>
                        
                        <th>Applicant ID</th>
                        <td><?php echo $ab=$row->applicantID    ?></td>
                        <?php $_SESSION['aab']=$ab;
                         ?>

                    </tr>

                    <tr>
                        <th>First Name</th>
                        <td><?php echo $row->firstName  ?></td>
                    </tr>

                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $row->lastName     ?></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                         <td><?php echo $row->email        ?></td>
                     </tr>

                     <tr>
                        <th>Phone </th>
                         <td><?php echo $row->phone     ?></td>
                     </tr>

                     <tr>
                        <th>Blood Group </th>
                         <td><?php echo $row->bloodGroup     ?></td>
                     </tr>

                     <tr>
                        <th>Location(village)</th>
                         <td><?php echo $row->village     ?></td>
                     </tr>

                     <tr>
                        <th>Location(thana)</th>
                        <td><?php echo $row->thana        ?></td>
                    </tr>


                     <tr>
                        <th>Location(district)</th>
                         <td><?php echo $row->district     ?></td>
                     </tr>
                        


                   <?php } ?>
                </table>

  

            </div>
        </div>
    </div>
</body>
</html>


