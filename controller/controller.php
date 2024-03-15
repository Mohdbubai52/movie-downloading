<?php

require_once("model/model.php");
require_once("Mail/sendmail/testSendMail.php");
class controller extends model
{
    public $userurl =' http://localhost/projects/movie%20downloading/assets/';
    public function __construct()
    {
    


        // echo " <pre>";
        //     print_r($_SERVER);
        //     echo " </pre>";



        parent::__construct();
        if(isset($_SERVER['PATH_INFO']))
        {

            switch($_SERVER['PATH_INFO'])
            {
                case '/home':
                    $responses = $this->select("product_info");
                    $harry = $this->select("harry_potter");
                    require_once("view/header.php");
                    require_once("view/index.php");
                    // require_once("view/news.php");
                    require_once("view/footer.php");
                    break;

                case '/news':
                    require_once("view/header.php");
                    require_once("view/news.php");
                    require_once("view/footer.php");
                    break;
                case '/harry_potter':
                    require_once("view/header.php");
                    require_once("view/harry_potter.php");
                    require_once("view/footer.php");
                    break;
                    case '/fast':
                        require_once("view/header.php");
                        require_once("view/fast.php");
                        require_once("view/footer.php");
                        break;
                    case '/registration':
                            if(isset($_REQUEST['reg_button']))
                            {

                                $this->insert();               
                            }
                    require_once("view/header.php");
                    require_once("view/registration.php");
                    require_once("view/footer.php");
                    

                    break;
                    case '/login':
                    //    require_once("view/header.php");
                        require_once("view/login.php");
                        // require_once("view/footer.php");
                        echo "<pre>";
                            // print_r($_REQUEST);
                            echo "</pre>";
                            $data = $_REQUEST;
                            $this->login($data);
                        break;
                case '/admin_dashboard':
                        require_once("view/admin_dashboard/admin_head.php");
                        require_once("view/admin_dashboard/admin_body1.php");
                        require_once("view/admin_dashboard/admin_order.php");
                        require_once("view/admin_dashboard/admin_table.php");
                        // echo "inside admin";
                        break;
                
                case '/product_upload':
                    require_once("view/admin_dashboard/admin_head.php");
                    require_once("view/admin_dashboard/products.php");
                   
                    if(isset($_REQUEST['pro_submit']))
                    {
                        if($_REQUEST['movie']['fast'])
                        {

                            $this->product_insert();    
                        }
                        else
                        {
                            $this->harry();
                        }
                    }
                    break;


                case '/tables':
                    $response = $this->select("user_data");
                    $responses = $this->select("product_info");
                    $harry = $this->select("harry_potter");
                    require_once("view/admin_dashboard/admin_head.php");
                    require_once("view/admin_dashboard/tables.php");
                    break;



                case '/pages':
                    if(isset($_REQUEST['Product_ID']))
                    {
                        
                        $data = $this->selectwhere("product_info",$_REQUEST);
                        // $datas = $this->selectwhere("harry_potter",$_REQUEST);
                        require_once("view/header.php");
                        require_once("view/pages.php");
                        require_once("view/footer.php");
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        //  exit;
                    }
                    if(isset($_REQUEST['harry_ID']))
                    {
                        
                        // $data = $this->selectwhere("product_info",$_REQUEST);
                        $data = $this->selectwhere("harry_potter",$_REQUEST);
                        require_once("view/header.php");
                        require_once("view/pages.php");
                        require_once("view/footer.php");
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        //  exit;
                    }
                    // $responses = $this->select("product_info");
                    // $responses = $this->selectwhere("product_info",$_REQUEST);
                    break;

                case '/updates':
                    if(isset($_REQUEST['product_ID']))
                    {
                            $data = $this->selectwhere("product_info",$_REQUEST);
                            // $data = $this->selectwhere("products",$_REQUEST);
                    }
                    if(isset($_REQUEST['harry_ID']))
                    {
                            $data = $this->selectwhere("harry_potter",$_REQUEST);
                            // $data = $this->selectwhere("products",$_REQUEST);
                    }
                    
                    // require_once("view/admin_dashboard/admin_head.php");
                    require_once("view/admin_dashboard/updates.php");
                    break;

                    // case '/updates':
                    // // print_r($_REQUEST);
                    // if(isset($_POST["update-btn"]))
                    // {
                    //     if($_FILES['image']['error'] ==0)
                    //     {
                    //         $image =  time().$_FILES['image']['name'];
                    //         move_uploaded_file($_FILES['image']['tmp_name'],"upload/$image");
                    //     }
                    //     else
                    //     {
                    //         $image = $_REQUEST['image_old'];
                    //     }
                    //     echo "inside if";
                    //     $data = array(
                    //         "username" => $_REQUEST["username"],
                    //         "email" => $_REQUEST["email"],
                    //         "mobile" => $_REQUEST["mobile"],
                    //         "password" => $_REQUEST["password"],
                    //         "image"=> $image
                    //     );

                    //     $res = $this->update('product_info',$data,array("id"=>$_REQUEST['id']));

                    //     if($res["code"]=="1")
                    //     {
                    //         header("location:user");
                    //     }
                    //     else
                    //     {
                    //         echo "<script> alert('Error while inserting some data try again!!!!!')   </script>";
                    //     }
                    // }

                    // break;
                    
                    case '/user':

                        // $response = $this->select("product_info");
                        // $response = $this->select("products");
                        if(isset($_REQUEST['delete_btn']))
                        {
                                $this->delete($_REQUEST['delete_btn'],"product_info");
                            }
                            // require_once("view/admin/header.php");
                            // require_once("view/admin/update-user.php");
                            // require_once("view/index.php");
                            // print_r($_REQUEST);
                        // echo "User Page";
                        // require_once("view/admin/footer.php");
                        break;
                }
        }
        else
        {
            header("location:home");
        }
        
    }
}
$object =  new controller;
?>