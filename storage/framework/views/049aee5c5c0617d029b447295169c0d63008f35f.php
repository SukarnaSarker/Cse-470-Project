<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/* http://www.jquery2dotnet.com/ */
#colorstar { color: #ee8b2d;}
.badForm {color: #FF0000;}
.goodForm {color: #00FF00;}
.evaluation { margin-left:30px;} 
</style>
</head>
<body>
<section>
<div class="container">
        <h2>Evaluation<small> Description </small></h2>
</div>
<div class="container">
    
    <h3>Rate This Course</h3>
    <div class="row lead evaluation">
        <div id="colorstar" class="starrr ratable" ></div>
        <span id="count">0</span> star(s) - <span id="meaning"> </span>
            
        
            <div class='indicators' style="display:none">
                <div id='textwr'>What went wrong?</div>
                <input id="rate[]" name="rate[]" type="text" placeholder="" class="form-control input-md" style="display:none;">
                <input id="rating[]" name="rating[]" type="text" placeholder="" class="form-control input-md rateval" style="display:none;">
                
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Punctuallity</button>
                 <input type="checkbox" class="hidden"  />
                </span>
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Assistance</button>
                 <input type="checkbox" class="hidden"  />
                </span>
                <span class="button-checkbox">
                <button type="button" class="btn criteria" data-color="info">Knowledge</button>
                 <input type="checkbox" class="hidden"  />
                </span>
            </div>
            
        
    </div>
    
</div>



</section>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\jobportal\resources\views/auth/rating.blade.php ENDPATH**/ ?>