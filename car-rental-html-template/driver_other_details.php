<?php
include_once('MyControl.php');
?>

<html>
<head>
    <style>
        body
{
    margin: 0%;
}
.background
{
    background-image: url("img/carousel-1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100%;
    margin-top:10px;
    display: grid;
    justify-content: center;
    align-content: center;
}
.form
{
    background-color: rgba(165, 147, 229, 0.226);
    backdrop-filter: blur( 10.0px );
    margin-right: 10%;
    margin-left: 10%;
    padding: 20px;
    border-radius: 10px;
}
.input {
    padding: 10px;
    width: 100%;
    margin-top: 10px;
    background-color: rgba(245, 245, 245, 0.753);
    border: 0;
    border-radius: 20px;
    color: white;
}
.gender
{
    padding: 10px;
    width: 100%;
    margin-top: 10px;
    background-color: rgba(245, 245, 245, 0.753);
    border: 0;
    border-radius: 20px;
    color: rgb(15, 15, 15);
}
.form button
{
    background-image:  linear-gradient(95deg, rgb(70, 70, 233) 10%, blue);
    padding: 10px 100px;
    color: black;
    border: 0;
    margin-top: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;
}
hr
{
    background-image:  linear-gradient(95deg, rgb(70, 70, 233) 10%, blue);
    height: 3px;
    border: 0;
}
    </style>
</head>
<body>

  <form method="post" enctype="multipart/form-data" onsubmit="fun()">
    
    <div class="background">
        <div class="form">
            <h1  style="text-align: center; color: white;">Complete Profile</h1>

            <input type="text" placeholder="Car Name" class="input" name="car_name">
            
            <input type="text" placeholder="Car Number" class="input" name="car_number">

            <div class="gender">
                <label>Upload Car Image</label><br>
                <input type="file" name="car_image">
            </div>

            <div class="gender">
                <label>Upload Car Insurance</label><br>
                <input type="file" name="car_insurance" >
            </div>

            <div class="gender">
                <label>Upload Car PUC</label><br>
                <input type="file" name="car_puc" >
            </div>

            <input type="text" placeholder="Car Rent" class="input" name="price">

          <button type="submit" value="submit" class="btn btn-default" name="complete_my_profile">Complete My Profile</button>
            <script>
                        function fun()
                        { 
                            alert("Account Create SuccessFully");
                            alert("** Your Account Is Block Please Contact Admin To Unblock Account **");
                        }
            </script>


          <hr>

           
        </div>
    </div>

  </form>

</body>
</html>