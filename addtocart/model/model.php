
<?php
    //create a model
    class model
    {
        //delacre a globle variable
        public $con="";
        
        public function __construct()
        {
            //database connection
            try
            {
                $this->con=new mysqli("localhost","root","","cart");
               // echo "connect successfully";
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->con));
            }
        }

             // create a member function for join tables 
                public function joindata($table,$table1,$column,$id)
                {
                    $arr = array();
                    $select="select * from $table join $table1 on where $table1.$column='$id'";
                $query=mysqli_query($this->con,$select);
                while($fetch=mysqli_fetch_array($query))
                {
                $arr[]=$fetch;

                }
                return $arr;
                
                }
                public function selectcount($table,$column)
                {
                $select="select count($column) as total from $table";
                $query=mysqli_query($this->con,$select);
                while($fetch=mysqli_fetch_array($query))
                {
                $arr[]=$fetch;

                }
                return $arr;
                }

                public function selectsubtotal($table,$column,$column1)
                {
                $select="select sum($column) as total from $table where $column1";
                $query=mysqli_query($this->con,$select);
                while($fetch=mysqli_fetch_array($query))
                {
                $arr[]=$fetch;

                }
                return $arr;
                }

                  //create a member function for insert all data
            public function insertalldata($table,$data)
            {

                $key=array_keys($data);
                $key1=implode(',',$key);

                $value=array_values($data);
                $value1=implode("','",$value);

                $insert="insert into $table($key1) values ('$value1')";
                 //echo $insert; exit();
                $query=mysqli_query($this->con,$insert);
                // echo $query; exit();
                return $query;
            } 
            public function selectalldata($table)
            {
        
           $select="select * from $table"; 
            $query=mysqli_query($this->con,$select);
            while($fetch=mysqli_fetch_array($query))
            {
                $arr[]=$fetch;

            }
                return $arr;
            }
    }



?>
