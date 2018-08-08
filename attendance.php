<?php



 if(isset($_POST['asubmit'])){
                    $aroll_no = $_POST['aroll'];
                    if($aroll_no == "" || empty($aroll_no)){
                        echo"ROLL NO required";
                    }
                    else{
                        $asub1 = $_POST['asub1'];
                        $asub2 = $_POST['asub2'];
                       $asub3 = $_POST['asub3'];
                       $asub4 = $_POST['asub4'];
                        $abatch = $_POST['abatch'];
                        $adate = $_POST['adate'];
                    
                        
                       $add_attendance = "INSERT INTO attendance (roll_no, batch, date, sub1, sub2, sub3, sub4) "; 
                       $add_attendance.="VALUES('$aroll_no','$abatch', '$adate', '$asub1','$asub2' ,'$asub3' ,'$asub4')";
                        $aresult = mysqli_query($conn,$add_attendance);
                        
                        if(!$aresult){
                            die('FAILED'.mysqli_error($conn));
                        }
                    }
         }






?>
