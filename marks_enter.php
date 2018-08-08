<?php

$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="synergy";
 
foreach($db as $key => $value){
	define(strtoupper($key),$value);
	
}
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

include("function.php");
//if($conn) echo "conn";

 if(isset($_POST['add'])){
                    $roll_no = $_POST['roll'];
                    if($roll_no == "" || empty($roll_no)){
                        echo"ROLL NO required";
                    }
                    else{
                        $sub1 = $_POST['sub1'];
                        $sub2 = $_POST['sub2'];
                       $sub3 = $_POST['sub3'];
                       $sub4 = $_POST['sub4'];
                        $batch = $_POST['batch'];
                        $test_date = $_POST['test_date'];
                        $test_name = $_POST['test_name'];
                    
                        
                       $add_marks = "INSERT INTO marks (roll_no, batch, sub1, sub2, sub3, sub4, test_date, test) "; 
                       $add_marks.="VALUES('$roll_no','$batch','$sub1','$sub2' ,'$sub3' ,'$sub4', '$test_date', '$test_name')";
                        $result = mysqli_query($conn,$add_marks);
                        
                        if(!$result){
                            die('FAILED'.mysqli_error($conn));
                        }
                    }
         }






?>
