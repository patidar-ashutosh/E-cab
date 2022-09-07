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

  <form method="post" enctype="multipart/form-data">
    
    <div class="background">
        <div class="form">
            <h1  style="text-align: center; color: white;">YOUR PROFILE</h1>

      
        <input type="text" placeholder="Car Number" class="input" name="car_number" value="<?php echo $d->car_number; ?>">
        <input type="text" placeholder="Car Name" class="input" name="car_name" value="<?php echo $d->car_name; ?>">
                
        <!-- car image  -->
        <div class="gender">
            <label>Car Image</label><br>
            <img src="driverotherdetails/<?php echo $d->car_image; ?>"  height= "50%" width = "50%" >
        </div>

        <!-- car Insurance -->
        <div class="gender">
            <label>Car Insurance</label><br>
            <img src="driverotherdetails/<?php echo $d->car_insurance; ?>" height= "50%" width = "50%" >
        </div>

        <!-- car puc  -->
        <div class="gender">
            <label>Car PUC</label><br>
            <img src="driverotherdetails/<?php echo $d->car_puc; ?>"  height= "50%" width = "50%" >
        </div>

          <a href="order" class="btn btn-primary py-md-3 px-md-5 mt-2">Go To Order</a>

            <hr>
           
        </div>
    </div>

  </form>

</body>
</html>