<!DOCTYPE html>
<html lang="en">

<head>
> 
<style>
#background-video {
  height: 100vh;
  width: 100vw;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}

/* page content */
h1, h2 {
  color: white;
  font-family: Trebuchet MS;
  font-weight: bold;
  text-align: center;
}

h1 {
  font-size: 6rem;
  margin-top: 30vh; 
}

h2 { font-size: 3rem; }

@media (max-width: 750px) {
    #background-video { display: none; }
    body {
      background: url("https://assets.codepen.io/6093409/river.jpg") no-repeat;
      background-size: cover;
    }
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  
}

.navbar a {
  float: right;
  font-size: 20px;
  color: black;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  margin-top: 4px;

}

</style>
</head>
<body>
  <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
  <source src="bg.mp4" type="video/mp4">
</video>
 <div class="navbar">
  <a href="employerregistration">Employer?</a>
  <a href="registration">Seeker?</a>
  <a href="adminlogin">Admin</a>

  </div> 
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jobportal\resources\views/welcome.blade.php ENDPATH**/ ?>