<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {


        // echo " <pre>";
        //     print_r($_SERVER);
        //     echo " </pre>";
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    // if(isset($_REQUEST['cart']))
                    // {
                    //     header("location:cart");
                    // }
                    $response = $this->select("uers");
                    $responses = $this->select("hero_section");
                    $products = $this->select("new_arivals");
                    // echo "<pre>";
                    //     print_r($responses);
                    //      echo "</pre>";
                    require_once('view/header.php');
                    require_once('view/flotter.php');
                    require_once('view/footer.php');


                    break;
                case '/about':
                    require_once('view/header.php');
                    require_once('view/about_us.php');
                    require_once('view/footer.php');
                    break;
                case '/contact':
                    require_once('view/header.php');
                    require_once('view/contact_us.php');
                    require_once('view/footer.php');
                    break;
                case '/shop':
                    require_once('view/header.php');
                    require_once('view/shop.php');
                    require_once('view/footer.php');
                    break;
                case '/products':
                    if(isset($_REQUEST['Product_ID']))
                    {

                        $data = $this->selectwhere("new_arivals", $_REQUEST);
                    }
                    // echo "<pre>";
                    //  print_r($data);
                    //   echo "</pre>"; 

                    require_once('view/header.php');
                    require_once('view/products.php');
                    require_once('view/footer.php');
                    break;
                case '/cart':
                    // $data=$_REQUEST['data'];
                    $data = $this->selectwhere("new_arivals", $_REQUEST);
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    //  echo "</pre>";
                    require_once('view/header.php');
                    require_once('view/cart.php');
                    require_once('view/footer.php');
                    break;
                case '/checkout':
                    //  echo "<pre>";
                    // print_r($_REQUEST);
                    //  echo "</pre>";

                    if (isset($_REQUEST['pro_submit'])) {
                        echo "<pre>";
                        print_r($_REQUEST);
                        echo "</pre>";
                        $bata = $_REQUEST;
                        $this->register($bata);
                    }
                    $data = $this->selectwhere("new_arivals", $_REQUEST);
                    require_once('view/header.php');
                    require_once('view/checkout.php');
                    require_once('view/footer.php');
                    break;
                case '/admin_dashboard':
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/dashboard.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    break;
                case '/dashboard':
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/dashboard.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    break;
                case '/profile':
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/profile.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    break;
                case '/tables':
                    $response = $this->select("uers");
                    $responses = $this->select("hero_section");
                    // $response = $this->select("uers");
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/tables.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    break;
                case '/additems':
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/additems.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    if (isset($_REQUEST['Choices'])) {
                        if ($_REQUEST['Choices'] == 'Hero') {
                            $data = 'hero_section';
                            $this->product_insert($data);
                        }
                        if ($_REQUEST['Choices'] == 'new_arivals') {
                            $data = 'new_arivals';
                            $this->product_insert($data);
                        } else {
                            echo "nahi ho raha he";
                        }
                    }
                    break;
                case '/registration':
                    if (isset($_REQUEST["Submit"])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";

                        $data = $_REQUEST;
                        $this->register($data);
                    }
                    require_once('view/header.php');
                    require_once('view/registration.php');
                    require_once('view/footer.php');
                    break;
                case '/login':
                    if (isset($_REQUEST["Submit"])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        $data = $_REQUEST;
                        $this->login($data);
                    }
                    require_once('view/header.php');
                    require_once('view/login.php');
                    require_once('view/footer.php');
                    break;

                case '/orders':

                    $response = $this->select("user_address");
                    $where = $response['data'][0]->Product_ID;
                    // $responses = $this->selectwhere("new_arivals",$_REQUEST);
                    $t = $response['data'];
                    $h = $t[0];
                    foreach ($t as $key) {
                        // echo "<pre>";
                        // print_r($key->Product_ID);
                        // // $key['Product_ID'];
                        // exit;
                        $k[] = $key->Product_ID;

                    }


                    // return $response["data"] = $data;
                    $responses = $this->selectwhereFetch("new_arivals", $k);
                    // echo "<pre>";
                    // print_r($responses);
                    // echo "</pre>";
                    // exit;
                    require_once('view/admin_dashboard/admin_header.php');
                    require_once('view/admin_dashboard/orders.php');
                    require_once('view/admin_dashboard/admin_footer.php');
                    break;

            }
        } else {
            header("location:home");
        }

    }



}
$object = new controller;



?>