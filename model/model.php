<?php

class model
{

    public $connection;
    public function __construct()
    {
       
        try {
            $this->connection = new mysqli("localhost","root","","movie_hunter");
            // echo "success";
        } catch (\Throwable $th) {
            echo "Something went wrong";
        }
        
    }
// -------------------------------------------------------------------------------------------------
    public function select($table)//dynamic type table he ye wala
    {
        $sql = "SELECT * from $table";

        $sqlex = $this->connection->query($sql);
        if($sqlex->num_rows>0)
        {
            while($fetch = $sqlex->fetch_object())
            {
                $fetchdata[] = $fetch;
            }
            $response["code"] = "1";
            $response["status"] = "success";
            $response["data"] = $fetchdata;
        }
        else
        {
            $response["code"] = "0";
            $response["status"] = "Fail";
            $response["data"] = 0;

        }
        // print_r($response);
        return $response;
        // exit;
    }

//    ------------------------------------------------------------------------------------------------------------     
    

    public function insert()
    {
        if(isset($_REQUEST['reg_button']))
        {   

        //     echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";


            $name=$_REQUEST['User_name'];
            $number=$_REQUEST['ph_no'];
            $Email=$_REQUEST['mail'];
            $password=$_REQUEST['password'];
             
    
            $insert= "INSERT INTO user_data (NAME , EMAIL , PASSWORD , NUMBER) VALUES ('$name'
            ,'$Email','$password','$number')";
            // echo"$insert";
            $sqlex = $this->connection->query($insert);   
        }                  
        if(isset($_REQUEST['pro_submit']))  
        {
            echo"hello";
            $pro_name=$_REQUEST['product_name'];
            $pro_img = $_REQUEST['Pro_IMG'];
            $pro_price = $_REQUEST['roduct_price'];


            $product_insert= " INSERT INTO product_info (Product_Name , Product_IMG  ,Product_Price)
            VALUES ('$pro_name','$pro_img','$pro_price') ";
            $sqlex = $this->connection->query($product_insert);

        }                   
       
    }
    // ----------------------------------------------------------------------------------------------------------?

    public function product_insert()
    {
        if(isset($_REQUEST['pro_submit']))  
        {
            echo"hello";
            $pro_name=$_REQUEST['product_name'];
            // $pro_img = $_REQUEST['Pro_IMG'];
              if($_FILES['image']['error'] ==0)
            {
                $image =  time().$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],"upload/$image");
            };
            $tittle = $_REQUEST["tittle"];
            $about = $_REQUEST["about"];


            $product_insert= " INSERT INTO product_info (Product_Name , Product_IMG  , tittle , about)
            VALUES ('$pro_name','$image','$tittle','$about') ";
            $sqlex = $this->connection->query($product_insert);
    }
    
    
}

// -----------------------------------------------------------------------------------------------------------------------------

public function login($data)
{
    // print_r($data);


    if($data)
    {
        $sql = "select * from user_data where (EMAIL='$data[username]' or NAME = '$data[username]' or NUMBER = '$data[username]')
        and PASSWORD = '$data[password]'";
        // echo $sql;
        $sqlex = $this->connection->query($sql);
        echo "<pre>";
        // print_r($sqlex);
            if($sqlex->num_rows>0)
            {
                // echo "Success";

                $fecthdata = $sqlex->fetch_object();
                // print_r($fecthdata);
                    if($fecthdata->role == 1)
                    {
                        header("location:admin_dashboard");
                    }
                    else
                    {
                        header("location:home");

                    }
            }
            else
            {
                echo "<script>alert('username or password is incorrect') </script>";
            }
    
    }
}




// ---------------------------------------------------------------------------------------------

public function selectwhere($table,$where='')
{
    $sql = "SELECT * FROM $table";

    if($where !="")
    {
        $sql .=" WHERE";
        foreach($where as $key => $value )
        {
            $sql .= " $key = $value AND";
        }
        $sql = rtrim($sql,"AND");
        // echo $sql;

        $sqlex=$this->connection->query($sql);
        if($sqlex->num_rows>0)
        {
            while($fetch = $sqlex->fetch_object())
            {
                $fetchdata[] = $fetch;
            }
            $response["code"] = "1";
            $response["status"] = "success";
            $response["data"] = $fetchdata;
        }
        else
        {
            $response["code"] = "0";
            $response["status"] = "Fail";
            $response["data"] = 0;

        }
        // print_r($response);
        return $response;
        // exit;
    }
    
}
public function harry()
    {
        if(isset($_REQUEST['pro_submit']))  
        {
            echo"hello";
            $pro_name=$_REQUEST['product_name'];
            // $pro_img = $_REQUEST['Pro_IMG'];
              if($_FILES['image']['error'] ==0)
            {
                $image =  time().$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],"upload/$image");
            };
            $tittle = $_REQUEST["tittle"];
            $about = $_REQUEST["about"];


            $product_insert= " INSERT INTO harry_potter (NAME , Product_IMG  , tittle , about)
            VALUES ('$pro_name','$image','$tittle','$about') ";
            $sqlex = $this->connection->query($product_insert);
    }
}
public function update($table,$data,$id)
{
    $sql = "UPDATE $table SET";
            foreach($data as $key => $value)
            {
                $sql .= " $key = '$value',";
            }
            // echo $sql;
            $sql = rtrim($sql,",");
            
            $sql .= " WHERE ";
            foreach($id as $key => $value)
            {
                $sql .= " $key = $value AND";
            }
            $sql = rtrim($sql,"AND");
            // echo $sql;
            
            $sqlex = $this->connection->query($sql);
            if($sqlex > 0)
            {
                $response["code"] = "1";
                $response["message"] = "success";
                $response["data"] = "1";

            }
            else
            {
                $response["code"] = "0";
                $response["message"] = "Try Again";
                $response["data"] = "0";
            }
            return $response;
}                 
public function delete($id,$tbl)
{
    // echo $id;
    // echo $tbl;
    // exit;

    $sql = "DELETE FROM $tbl WHERE id = $id";
    $this->connection->query($sql);
    header("location:user");
}            
}

?>