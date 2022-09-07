<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="book_now">
     <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center" style="font-size:55px;">
            <?php
                if(isset($_SESSION['user']))
                {
                    echo "WELCOME : ". $_SESSION['user'];
                }
            ?> </h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Book Your Car</h1>
            <div class="row">
                    <?php
                        foreach($r as $t)
                        {
                    ?>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="driverotherdetails/<?php echo $t->car_image; ?>" alt="">
                        <h4 class="text-uppercase mb-4"><?php echo $t->car_name; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="">INR <?php echo $t->price; ?></a>
                        <!-- <button class="btn btn-primary px-3" type="submit" name="book_now">BOOK NOW</button> -->
                        <a class="btn btn-primary px-3" style="text-decoration: none;" href="book_car?dodi=<?php echo $t->dodi; ?>" name="book_now">BOOK NOW</a>
                    </div>
                </div>
                    <?php
                        }
                    ?>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
</form>
</body>
</html>