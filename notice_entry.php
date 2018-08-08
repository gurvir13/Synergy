<?php

if(isset($_POST['reset_notice'])) {
    
    $del_query = "DELETE FROM notices";
    
    $del_result = mysqli_query($conn, $del_query);
    
    if(!$del_result) {
        
        die("Could not reset notice section");
    }
    else {
        
        echo "Notice section is ready to be written!!";
    }
}

elseif(isset($_POST['update_notice'])) {
    $notice1 = $_POST['notice1'];
    $notice2 = $_POST['notice2'];
    $notice3 = $_POST['notice3'];
    $notice4 = $_POST['notice4'];
    
    $update_notice_query = "INSERT INTO `notices`(`notice1`,`notice2`,`notice3`,`notice4`) VALUES('$notice1','$notice2','$notice3','$notice4')";
    $update_notice_result = mysqli_query($conn, $update_notice_query);
    
    if(!$update_notice_result) {
        
        die("Could not update notice section");
    }
    else {
        
        echo "Notice section successfully updated!!";
    }
}

?>