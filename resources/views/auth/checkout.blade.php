<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Added courses</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif
}

.container {
    min-height: 100vh;
    background-color: skyblue;
    display: flex;
    justify-content: center;
    align-items: center
}

.card {
    height: 380px;
    width: 350px;
    background-color: white;
    border-radius: 10px;
    padding: 20px 15px
}

.card hr {
    border-top: 1px solid #ccc;
    margin-bottom: 20px;
    margin-top: 10px
}

.card h3 {
    letter-spacing: 1px;
    font-size: 20px;
    font-weight: 900
}

.card-details {
    position: relative
}

.card-details input {
    width: 100%;
    height: 48px;
    padding: 0px 10px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    outline: none;
    border-radius: 10px;
    caret-color: #3769D3;
    font-size: 16px;
    transition: all 1s
}

.card-details input:focus {
    border: 3px solid #3769D3
}

.card-details input:focus~span {
    color: #3769D3;
    font-weight: 900
}

.card-details input:focus~i {
    color: #3769D3
}

.card-details span {
    position: absolute;
    top: -10px;
    left: 15px;
    background-color: white;
    font-size: 14px;
    padding: 0px 5px;
    transition: all 1s
}

.card-details i {
    position: absolute;
    right: 10px;
    top: 15px;
    color: #ccc;
    z-index: 1000;
    transition: all 1s
}

.exp-cvv {
    margin-top: 25px;
    display: flex;
    flex: 0 50%;
    flex-direction: row;
    justify-content: space-between;
    gap: 5px;
     
}

.mt-25 {
    margin-top: 25px
}

.tick {
    display: flex;
    padding: 20px 10px;
    align-items: center
}

.tick span {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: 3px solid blue;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    cursor: pointer;
    color: #fff
}

.d-none {
    display: none
}

.tick p {
    margin-left: 15px;
    font-weight: 900;
    font-size: 18px
}

.p-blue {
    background-color: blue !important
}

.button {
    display: flex;
    justify-content: center;
    align-items: center
}

.button button {
    height: 60px;
    width: 100%;
    border-radius: 10px;
    background-color: white;
    color: white;
    font-size: 18px;
    font-weight: 600;
    transition: all 0.5s;
    cursor: pointer;
    border: none
}

.button button:hover {
    background-color: #040481
}
</style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="top">
            <h3>Provide card Information</h3>
            <hr>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert>name">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="card-details"> <input type="text" placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size="19"> <span>Card Number</span> <i class="fa fa-credit-card"></i> </div>
        <div class="exp-cvv">
            <div class="card-details"> <input type="text" placeholder="mm/yyyy" data-slots="my"> <span>Expiry date</span> <i class="fa fa-calendar"></i> </div>
            <div class="card-details"> <input type="text" placeholder="000" data-slots="0" data-accept="\d" size="3"> <span>CVV</span> <i class="fa fa-info-circle"></i> </div>
        </div>
        <div class="card-details mt-25"> <input type="text" placeholder="Enter cardholder's full name"> <span>Card Holder Name</span> </div>
        <div class="button"> <button ><a href="/checkout/{{$data->user_id}}">Confirm</a></button> </div>
    </div>
</div>
</body>
</html>