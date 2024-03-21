<?php

class model
{
    public $connection;
    public function __construct()
    {

        try {
            $this->connection = new mysqli("localhost", "root", "", "shop");
            // echo "success";
        } catch (\Throwable $th) {
            echo "Something went wrong";
        }

    }


    // -------------------------------------------------------------------------------------------------


    public function register($data)
    {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        if ($data) {
            echo "<pre>";
            // echo "inside if";
            // echo "<br>";
            array_pop($data);
            array_pop($data);
            // print_r(array_keys($data));
            // print_r($data);
            $valuedata = implode("','", array_values($data));
            $keysdata = implode(",", array_keys($data));
            // echo $keysdata;
            // echo "<br>";
            // echo $valuedata;
            // echo "<br>";
            //     
            // echo "<pre>";
            $SQL = " INSERT INTO user_address ($keysdata) VALUES ('$valuedata') ";
            // echo $SQL;

            // $query = $sql.$value;
            // echo $query;
            $this->connection->query($SQL); //this is how you perform query
            header("location:home");
            echo "</pre>";

        } else {
            echo "No data found";
        }
    }
    public function login($data)
    {
        // echo "<pre>";
        //   print_r($data);

        if ($data) {
            $sql = "select * from uers where (email='$data[Email]') and password = '$data[password]'";
            // echo $sql;
            $sqlex = $this->connection->query($sql);
            // echo "<pre>";
            // print_r($sqlex);
            if ($sqlex->num_rows > 0) {
                // echo "Success";

                $fecthdata = $sqlex->fetch_object();
                // print_r($fecthdata);
                if ($fecthdata->Role == 1) {
                    header("location:admin_dashboard");
                } else {
                    header("location:home");

                }
            } else {
                echo "<script>alert('username or password is incorrect') </script>";
            }
            // echo "</pre>";
        }
    }
    // =========================================================================================
    public function selectwhere($table, $where = "")
    {
        $sql = "Select * from $table";

        if ($where != "") {
            $sql .= " WHERE";
            foreach ($where as $key => $value) {
                $sql .= " $key = $value AND";

            }
            $sql = rtrim($sql, "AND");
        }
        // echo $sql;
        // exit;

        $sqlex = $this->connection->query($sql);

        if ($sqlex->num_rows > 0) {
            while ($fetchdata = $sqlex->fetch_object()) {
                $data[] = $fetchdata;
            }

            return $response["data"] = $data;
        } else {
            echo "no data found";
        }
    }
    // =================================================================================================================
    public function select($table)
    {
        // echo "<pre>";
        $sql = "SELECT * from $table";
        // echo $sql;

        $sqlex = $this->connection->query($sql);
        // print_r($sqlex);
        // echo "</pre>";

        if ($sqlex->num_rows > 0) {
            while ($fetch = $sqlex->fetch_object()) {
                $fetchdata[] = $fetch;
            }
            $response["code"] = "1";
            $response["status"] = "success";
            $response["data"] = $fetchdata;
        } else {
            $response["code"] = "0";
            $response["status"] = "Fail";
            $response["data"] = 0;

        }
        // print_r($response);
        return $response;
        // exit;
    }
    // ------------------------------------------------------------------------------------------------------
    public function product_insert($table)
    {
        if (isset($_REQUEST['pro_submit'])) {
            // echo"hello";
            $pro_name = $_REQUEST['product_name'];
            // $pro_img = $_REQUEST['Pro_IMG'];
            if ($_FILES['images']['error'] == 0) {
                $image = time() . $_FILES['images']['name'];
                move_uploaded_file($_FILES['images']['tmp_name'], "uploads/$image");
            }
            ;
            $tittle = $_REQUEST["details"];
            $price = $_REQUEST["product_price"];


            $product_insert = " INSERT INTO $table (Product_Name , Product_IMG  , Product_Price , Product_Details)
            VALUES ('$pro_name','$image','$price','$tittle') ";
            $sqlex = $this->connection->query($product_insert);
        }
    }

    // model call end bracket...............
    public function selectwhereFetch($table, $where = "")
    {
        $sql = "Select * from $table";

        if ($where != "") {
            $sql .= " WHERE Product_ID IN (";
            foreach ($where as $key => $value) {
                $sql .= "$value ,";

            }

            $sql = rtrim($sql, ",");
            $sql .= ")";
        }
        echo $sql;
        // exit;

        $sqlex = $this->connection->query($sql);

        if ($sqlex->num_rows > 0) {
            while ($fetchdata = $sqlex->fetch_object()) {
                $data[] = $fetchdata;
            }

            return $response["data"] = $data;
        } else {
            echo "no data found";
        }
    }
}



?>