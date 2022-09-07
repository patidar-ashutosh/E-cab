<?php
ob_start();
include_once('Model.php');
class Control extends Model
{
    function __construct()
    {
        parent:: __construct();
        session_start();
        $url = $_SERVER['PATH_INFO'];

        switch($url)
        {
            case '/index':
                include_once('index_main.php');
                break;

            case '/about':
                include_once('about.php');
                break;

            case '/contact':
                // include_once('driver_header.php');
                if(isset($_POST['send_msg']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $data = array('name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message);
                    $this->Insert_Data('contact',$data);
                    echo "Email Send SuccessFully";
                }
                include_once('contact.php');
                // include_once('footer.php');
                break;

            case '/user_register':
                include_once('user_header.php');
                if(isset($_POST['register']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];

                    $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'gender'=>$gender);
                    $this->Insert_Data('register',$data);

                    //create session

                    $where = array('email'=>$email, 'password'=>$password);
                    $result = $this->Select_Login_Data('register',$where);
                    $n = $result->num_rows;
                    $fetch = $result->fetch_object();
                    $_SESSION['uid'] = $fetch->id;
                    $_SESSION['user'] = $fetch->name;


                    echo "Login Success";
                    header('location:index');
                }
                include_once('user_register.php');
                include_once('footer.php');
                break;

            case '/user_login':
                include_once('user_header.php');
                if(isset($_POST['login']))
                {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $where = array('email'=>$email, 'password'=>$password);
                    $result = $this->Select_Login_Data('register',$where);
                    $n = $result->num_rows;
                    if($n>0)
                    {
                        if(isset($_POST['remember']))
                        {
                            setcookie('email',$email,time()+3600);
                            setcookie('password',$password,time()+3600);
                        }

                        $fetch = $result->fetch_object();
                        $_SESSION['uid'] = $fetch->id;
                        $_SESSION['user'] = $fetch->name;
                        echo "Login Success";
                        header('location:cars');
                    }
                    else
                    {
                        echo "UserName & Password Is Wrong";
                    }
                }
                include_once('user_login.php');
                include_once('footer.php');
                break;

            case '/logout':
                unset($_SESSION['user']);
                header('location:index');
                break;

            case '/my_profile':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                $where = array('id'=>$_SESSION['uid']);
                $result =$this->Select_Login_Data('register',$where);
                $r = $result->fetch_object();

                if(isset($_POST['save_change']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];

                    $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'gender'=>$gender);
                    $this->update_data('register',$data,$where);
                    header('location:index');
                    // echo "<script>alert('Profile Update SuccessFully')</script>";
                }

                include_once('user_profile.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }

                break;

            case '/cars':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                $r = $this->Select_All_Data('driver_other_details');
                include_once('cars.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/book_car':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                if(isset($_GET['dodi']))
                {

                    //car details
                    $car_id = $_GET['dodi'];
                    $where = array('dodi'=>$car_id);
                    $result =$this->Select_Login_Data('driver_other_details',$where);
                    $r = $result->fetch_object();
                    $_SESSION['carid'] = $r->dodi;
                    $_SESSION['driveridforrides'] = $r->driver_id;
                    $_SESSION['price'] = $r->price;

                    //user details
                    $where = array('id'=>$_SESSION['uid']);
                    $result =$this->Select_Login_Data('register',$where);
                    $p = $result->fetch_object();

                    if(isset($_POST['book']))
                    {
                        $mobile = $_POST['mobile'];
                        $pickup_location = $_POST['pickup_location'];
                        $drop_location = $_POST['drop_location'];
                        $pickup_date = $_POST['pickup_date'];
                        $pickup_time = $_POST['pickup_time'];

                        $select_adult = $_POST['select_adult'];

                        $select_child = $_POST['select_child'];

                        $special_request = $_POST['special_request'];

                        $user_id = $_SESSION['uid'];

                        $driver_id = $_SESSION['driveridforrides'];

                        $carid = $_SESSION['carid'];

                        $price = $_SESSION['price'];

                        $data = array('mobile'=>$mobile, 'pickup_location'=>$pickup_location,'drop_location'=>$drop_location,
                        'pickup_date'=>$pickup_date,'pickup_time'=>$pickup_time,'select_adult'=>$select_adult,
                        'select_child'=>$select_child,'special_request'=>$special_request,'user_id'=>$user_id,'driver_id'=>$driver_id,'carid'=>$carid,'price'=>$price);

                        $this->Insert_Data('manage_rides',$data);
                        header('location:booking_status');
                    }

                }
                include_once('book_cars.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/booking_history':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                $where = array('user_id'=>$_SESSION['uid']);
                $re=$this->Select_Login_Data('manage_rides',$where);
                while($res = $re->fetch_object())
                {
                    $result[]=$res;
                }

                include_once('booking_history.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;



            case '/booking_status':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                $where = array('user_id'=>$_SESSION['uid']);
                $result =$this->Select_All_Data('manage_rides',$where);
                foreach($result as $r)
                {}
                $status = $r->status;
                if($status == "accept")
                {
                    header('location:booking_status_success');
                }
                else if($status == "reject")
                {
                    header('location:booking_status_unsuccess');
                }

                include_once('booking_status.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/booking_status_success':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                include_once('booking_status_success.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/booking_status_unsuccess':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                include_once('booking_status_unsuccess.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/paytm-payment':
                if(isset($_SESSION['user']))
                {
                include_once('user_header.php');
                if(isset($_SESSION['uid']))
                {
                    $where = array('user_id'=>$_SESSION['uid']);
                    $r =$this->Select_All_Data('driver_other_details',$where);
                }
                include_once('paytm-payment.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:user_register');
                }
                break;

            case '/payment_done':
                include_once('user_header.php');
                include_once('payment_done.php');
                include_once('footer.php');
                break;


            
                                                    // driver code



            case '/driver_register':
                include_once('driver_header.php');
                if(isset($_POST['register']))
                {
                    $name = $_POST['name'];
                    $demail = $_POST['email'];
                    $dpassword = $_POST['password'];
                    $gender = $_POST['gender'];

                    $data = array('name'=>$name, 'demail'=>$demail, 'dpassword'=>$dpassword, 'gender'=>$gender);
                    $this->Insert_Data('driver_register',$data);

                    // create session 
                    $where = array('demail'=>$demail, 'dpassword'=>$dpassword);
                    $result = $this->Select_Login_Data('driver_register',$where);
                    $n = $result->num_rows;
                    $fetch = $result->fetch_object();
                    $_SESSION['driveridfind'] = $fetch->driver_id;

                    header('location:driver_other_details');

                }
                include_once('driver_register.php');
                include_once('footer.php');
                break;

            case '/driver_login':
                include_once('driver_header.php');
                if(isset($_POST['dlogin']))
                {
                    $demail = $_POST['demail'];
                    $dpassword = $_POST['dpassword'];

                    $where = array('demail'=>$demail, 'dpassword'=>$dpassword);
                    $result = $this->Select_Login_Data('driver_register',$where);
                    $n = $result->num_rows;
                    if($n>0)
                    {
                        if(isset($_POST['dremember']))
                        {
                            setcookie('demail',$demail,time()+3600);
                            setcookie('dpassword',$dpassword,time()+3600);
                        }

                        $fetch = $result->fetch_object();
                      
                        $accountstatus = $fetch->status;
                        if($accountstatus == "block")
                        {
                            echo '<script>alert("** Your Account Is Block Please Contact Admin To Unblock Account **");</script>';
                        }
                        else if($accountstatus == "unblock")
                        {
                            $_SESSION['did'] = $fetch->driver_id;
                            $_SESSION['driver'] = $fetch->name;
                            header('location:index');
                        }

                    }
                    else
                    {
                        echo "UserName & Password Is Wrong";
                    }
                }
                include_once('driver_login.php');
                include_once('footer.php');
                break;

            case '/driver_logout':
                if(isset($_SESSION['did']))
                {
                unset($_SESSION['driver']);
                unset($_SESSION['did']);
                header('location:index');
                }
                else
                {
                    header('location:driver_register');
                }
                break;

            case '/profile':
                if(isset($_SESSION['did']))
                {
                include_once('driver_header.php');
                $where = array('driver_id'=>$_SESSION['did']);
                $result =$this->Select_Login_Data('driver_register',$where);
                $r = $result->fetch_object();

                if(isset($_POST['driver_profile_save_change']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];

                    $data = array('name'=>$name, 'demail'=>$email, 'dpassword'=>$password, 'gender'=>$gender);
                    $this->update_data('driver_register',$data,$where);
                    header('location:order');
                }

                include_once('driver_profile.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:driver_register');
                }
                break;

            case '/driver_other_details':
                include_once('driver_header.php');
                if(isset($_POST['complete_my_profile']))
                {
                    $car_name = $_POST['car_name'];
                    $car_number = $_POST['car_number'];
                    
                    $car_image = $_FILES['car_image']['name'];
                    move_uploaded_file($_FILES['car_image']['tmp_name'],'driverotherdetails/'.$car_image);

                    $car_insurance = $_FILES['car_insurance']['name'];
                    move_uploaded_file($_FILES['car_insurance']['tmp_name'],'driverotherdetails/'.$car_insurance);

                    $car_puc = $_FILES['car_puc']['name'];
                    move_uploaded_file($_FILES['car_puc']['tmp_name'],'driverotherdetails/'.$car_puc);

                    $price = $_POST['price'];

                    $driver_id = $_SESSION['driveridfind'];

                    $data = array('car_name'=>$car_name, 'car_number'=>$car_number, 'car_image'=>$car_image, 'car_insurance'=>$car_insurance, 'car_puc'=>$car_puc, 'price'=>$price, 'driver_id'=>$driver_id);
                    $this->Insert_Data('driver_other_details',$data);

                    header('location:driver_login');

                }
                include_once('driver_other_details.php');
                include_once('footer.php');
                break;

            case '/vehical_details':
                if(isset($_SESSION['did']))
                {
                include_once('driver_header.php');
                $vid = $_GET['vid'];
                $where = array('driver_id'=>$vid);
                $result = $this->Select_Login_Data('driver_other_details',$where);
                $d = $result->fetch_object();   
                include_once('vehical_details.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:driver_register');
                }
                break;

            case '/order':
                if(isset($_SESSION['did']))
                {
                include_once('driver_header.php');
                $where = array('driver_id'=>$_SESSION['did']);
                // $result =$this->Select_All_Data('manage_rides');
                // $result = $this->Select_Login_Data('manage_rides',$where);
                // $r = $result->fetch_object();

                $re=$this->Select_Login_Data('manage_rides',$where);
                while($res = $re->fetch_object())
                {
                    $result[]=$res;
                }

                include_once('driver_order.php');
                include_once('footer.php');
                }
                else
                {
                    header('location:driver_register');
                }
                break;

            case '/accept':
                if(isset($_SESSION['did']))
                {
                $where = array('mid'=>$_SESSION['orderid']);
                $data = array('status'=>'accept');
                if(isset($_GET['aid']))
                {
                    $this->update_data('manage_rides',$data,$where);
                    header('location:order');
                }
            }
                break;

            case '/reject':
                $where = array('mid'=>$_SESSION['orderid']);
                $data1 = array('status'=>'reject');
                if(isset($_GET['rid']))
                {
                    $this->update_data('manage_rides',$data1,$where);
                    header('location:order');
                }
                break;
















         
        }
    }
}
$obj = new Control();
ob_flush();
?>