<?php 
    function db(){
        $host = "127.0.0.1";
        $user = "root";
        $password = "1234";
        $db_name = "school";

        $dbConnect = mysqli_connect($host,$user,$password);

        if($dbConnect) {
            if(mysqli_select_db($dbConnect,$db_name)) {
                //echo "database connected!";
                return $dbConnect;
            }else{
                //echo "database not connect!";
                return false;
            }
        }
    }

    function get_student(){
        $db = db();
        if($db){
            $sql = "SELECT student_id,firstname,lastname,grade FROM `student`";
            mysqli_query($db,"SET NAMES UTF8");
            $query = mysqli_query($db,$sql);
            $arr = [];
            while($row = mysqli_fetch_assoc($query)){
                $arr[] = $row;
            }
            return $arr;
        }else{
            return false;
        }
    }

    function add_student($fname,$lname,$grade){
        $db = db();
        if($db){
            mysqli_query($db,"SET NAMES UTF8");
            $sql = "INSERT INTO `student`(firstname,lastname,grade) VALUES('$fname','$lname','$grade')";
            $query = mysqli_query($db,$sql);
            return $query;
        }else{
            return false;
        }
    }

?>