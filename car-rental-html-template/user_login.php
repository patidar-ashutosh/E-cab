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

<?php
    //email cookie
    if(isset($_COOKIE['email']))
    {
        $demail = $_COOKIE['email'];
    }
    else
    {
        $demail = '';
    }

    //password cookie
    if(isset($_COOKIE['password']))
    {
        $dpassword = $_COOKIE['password'];
    }
    else
    {
        $dpassword = '';
    }
?>

  <form method="post">
    
    <div class="background">
        <div class="form">
            <h1  style="text-align: center; color: white;">Login</h1>

            <input type="email" placeholder="Email" class="input" name="email" value="<?php echo $demail; ?>" required>
            <input type="password" placeholder="Password" class="input" name="password" value="<?php echo $dpassword; ?>" required>
            <br> <br>

            <input type="checkbox" name="remember"> Remember Me

            <button type="submit" class="btn btn-default" name="login">Login</button>

            
			<button class="btn btn-sm btn-warning"> <a href="forget_pass.php" >Forget Password?</a></button>


            <hr>

          <h5 style="color:yellow;">I Have No Account ::> <a href="user_register">REGISTER</a></h5>


        </div>
    </div>

  </form>

</body>
</html>