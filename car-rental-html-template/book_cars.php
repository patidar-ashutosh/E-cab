<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <!-- Page Header Start -->
    <div style="margin-top:50px;" class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5"><?php echo $r->car_name; ?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="driverotherdetails/<?php echo $r->car_image; ?>" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2"><?php echo $r->price; echo " RS" ?></h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Model: 2015</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Automatic</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>GPS Navigation</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
<form method="post">
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="First Name" value="<?php echo $p->name; ?>" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="Your Email" value="<?php echo $p->email; ?>" required="required">
                            </div>
                        </div>
                        <div class="row">
                           
                            <div class="col-12 form-group">
                                <input type="tel" class="form-control p-4" placeholder="Mobile Number" name="mobile" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <div>
                                    <input type="text" class="form-control p-4" placeholder="Pickup Location" name="pickup_location" required="required">
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div>
                                    <input type="text" class="form-control p-4 " placeholder="Drop Location" name="drop_location" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="date" class="form-control p-4 datetimepicker-input" name="pickup_date" required="required" placeholder="Pickup Date"
                                        data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" name="pickup_time" required="required" placeholder="Pickup Time"
                                        data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <select name="select_adult" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Adult</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select name="select_child" class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Child</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" name="special_request" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary px-3" style="text-decoration: none;" name="book">BOOK NOW</button>   
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Car Booking End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

</body>
</html>