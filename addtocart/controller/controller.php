<?php
    //error_reporting(0);
    require_once ("model/model.php");
    //inherite to controller
    class controller extends model
    {
        public function __construct()
        {
            parent:: __construct();
            $fetch=$this->selectalldata('tbl_product');
            
            $row=$this->selectalldata('tbl_cart');
            
            $totalcount=$this->selectcount('tbl_cart','cart_id');

            $subtotal=$this->selectsubtotal('tbl_cart','total','total');

            //   $showcart=$this->joindata('tbl_cart','tbl_product','tbl_cart.id=tbl_product.id','id');
            

            if(isset($_POST['cart']))
            {
                
                $id=$_POST['id'];
                $name=$_POST['name'];
                 $price=$_POST['price'];
                $qty=$_POST['qty'];
                $subtotal=($price*$qty);

                $data=array("id"=>$id,"cart_name"=>$name,"price"=>$price,"qty"=>$qty,"total"=>$subtotal);
                $chk=$this->insertalldata('tbl_cart',$data);
                
                if($chk)
                {
                    echo "<script>
                alert('Your Product added successfully')
                window.location='./';
                </script>
                ";
                }
            }
            
            
            
            if(isset($_POST['submit']))
            {
                // upload images
                $tmp_name=$_FILES["photo"]["tmp_name"];
                $imgname=$_FILES["photo"]["name"];
                $path="./upload/".$imgname;
                $type=$_FILES["photo"]["type"];
                $size=$_FILES["photo"]["size"]/1024;
                move_uploaded_file($tmp_name,$path);
                $name=$_POST["name"];
                $price=$_POST["price"];

                $data=array("image"=>$imgname,"name"=>$name,"price"=>$price);

                $chk=$this->insertalldata('tbl_product',$data);
                
                if($chk)
                {
                    echo "<script>
                alert('Your Product added successfully')
                window.location='./'
                </script>
                ";

                }

            
            }
            
            
            //load view via routing
            if(isset($_SERVER["PATH_INFO"]))
            {
                //routing for each pages using switch case
                switch($_SERVER["PATH_INFO"])
                {
                    case '/';
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    break;
                    
                    case '/cart';
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("cart.php");
                    break;

                    default:
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;

                    

                }
            }
        }

    }
    $obj=new controller;



?>