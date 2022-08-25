<!DOCTYPE html>
<html lang="en" class="">
<head>
    <style>
        body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #2196F3;
}

.mt-50{

    margin-top: 50px;
}

.mb-50{

    margin-bottom: 50px;
}



.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .1875rem;
}

.card-img-actions {
    position: relative;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center;
}

.card-img{

    width: 350px;
}

.star{
        color: red;
}

.bg-cart {
    background-color:orange;
    color:#fff;
}

.bg-cart:hover {
    
    color:#fff;
}

.bg-buy {
    background-color:green;
    color:#fff;
    padding-right: 29px;
}
.bg-buy:hover {
    
    color:#fff;
}

a{

    text-decoration: none !important;
}
    </style>

</head>


<body>

<div class="container d-flex justify-content-center mt-50 mb-50">
            
        <div class="row">
           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="python.png" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true">Learn Python: The Complete Python Programming Course(Course ID:1)</a>
                                            </h2>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">304 reviews</div>
                                        <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="1">
                                            <button class="btn btn-primary">Add to cart</button>
                                            </form>                                      
                                    </div>
                                </div>


                            
                             
           </div> 


           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="html.jpg" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true"> Introduction to Web Development with HTML, CSS, JavaScript(Course ID:2)</a>
                                            </h2>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$50.99</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">240 reviews</div>

                                         <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="2">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </form>

                                        
                                    </div>
                                </div>


                            
                             
           </div> 

           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="java.jpeg" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true">Java Programming Basics(Course ID:3)</a>
                                            </h2>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$20.99</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">34 reviews</div>

                                         <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="3">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </form>
                                        
                                    </div>
                                </div>


                            
                             
           </div> 


           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="excel.png" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true">Ben Currier's Excel Exposure(Course ID:4)</a>
                                            </h2>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$40.56</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">120 reviews</div>

                                         <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="4">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </form>

                                        
                                    </div>
                                </div>


                            
                             
           </div> 


           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="canva.jpg" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true"> Canva for Beginners(Course ID:5) </a>
                                            </h2>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$54.99</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">980 reviews</div>

                                         <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="5">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </form>

                                        
                                    </div>
                                </div>


                            
                             
           </div> 


           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="point.png" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h2 class="font-weight-semibold mb-2">
                                                <a href="rating" class="text-default mb-2" data-abc="true">Power Point for Beginners(Course ID:6)</a>
                                            </h2>

                                        <h3 class="mb-0 font-weight-semibold">$60.99</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">400 reviews</div>

                                         <form action="/add_to_cart" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="6">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </form>

                                        
                                    </div>
                                </div>
                             
           </div> 
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/courses.blade.php ENDPATH**/ ?>