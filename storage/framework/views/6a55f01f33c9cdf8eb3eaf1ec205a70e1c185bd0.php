<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resume</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="img/profile.jpg" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Personal Information<i class="fa fa-tasks"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1><?php echo e($data->name); ?></h1>
                        <h2></h2>
                    </div>
                </div>
                <!-- Header End -->
                
                <!-- Large Button Start -->
                <!-- Large Button End -->
                
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p><?php echo e($data->four); ?></p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p><?php echo e($data->three); ?></p><p>95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p><?php echo e($data->one); ?></p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p><?php echo e($data->two); ?></p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Bachelor Degree</h3>
                                    <p><?php echo e($data->university); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>College</h3>
                                    <p><?php echo e($data->college); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>High School</h3>
                                    <p><?php echo e($data->school); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Service Start -->
                <div class="service" id="service">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Service</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-desktop"></i>
                                    <h3><?php echo e($data->two); ?></h3>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-laptop"></i>
                                    <h3><?php echo e($data->one); ?></h3>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-search"></i>
                                    <h3><?php echo e($data->three); ?></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="srv-col">
                                    <i class="fa fa-envelope-open-text"></i>
                                    <h3><?php echo e($data->four); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Start -->
                




                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Personal Information</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Father's Name</h3>
                                    <p><?php echo e($data->fathername); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Mother's Name</h3>
                                    <p><?php echo e($data->mothername); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Present Location</h3>
                                    <p><?php echo e($data->    presentaddress); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Permanent Address(Village)</h3>
                                    <p><?php echo e($data->Village); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Permanent Address(Thana)</h3>
                                    <p><?php echo e($data->Thana); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Permanent Address(Upazila)</h3>
                                    <p><?php echo e($data->Upazila); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Permanent Address(District)</h3>
                                    <p><?php echo e($data->District); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>SSC GPA</h3>
                                    <p><?php echo e($data->ssc); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>HSC GPA</h3>
                                    <p><?php echo e($data->hsc); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>CGPA</h3>
                                    <p><?php echo e($data->cgpa); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Hobby</h3>
                                    <p><?php echo e($data->h1); ?> , <?php echo e($data->h2); ?> </p>
                                </div>
                            </div><div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Currently Studying</h3>
                                    <p><?php echo e($data->studying); ?></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Job Interest</h3>
                                    <p><?php echo e($data->workplaceinterest); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Working Hour Interest</h3>
                                    <p><?php echo e($data->workinghourinterest); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edu-col">
                                    <h3>Salary Interest</h3>
                                    <p><?php echo e($data->salaryinterest); ?></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Education Start -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p><i class="fa fa-user"></i><?php echo e($data->name); ?></p>
                                    <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com"><?php echo e($data->email); ?></a></p>
                                    <p><i class="fa fa-phone"></i><a href="tel:+1234567890"><?php echo e($data->phone); ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
            
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/mainn.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/index.blade.php ENDPATH**/ ?>