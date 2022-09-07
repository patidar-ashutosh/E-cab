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
            <h1  style="text-align: center; color: white;">WELCOME TO REGISTER</h1>

            <input type="text" placeholder="Name" class="input" name="name" required>
            <input type="email" placeholder="Email" class="input" name="email" required>
            <input type="password" placeholder="Password" class="input" name="password" required>
        <div class="gender">
            <label>Gender</label><br>
            Male<input type="radio" id="gender" value="male" name="gender" required>
            Female<input type="radio" id="gender" value="female" name="gender" required>
        </div>


          <button type="submit" class="btn btn-default" name="register">Register</button>

          <hr>

          <h5 style="color:yellow;">I Have Already Account ::> <a href="driver_login">LOGIN</a></h5>

           
        </div>
    </div>

  </form>

</body>
</html>