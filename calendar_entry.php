<?php

if(isset($_POST['calendar_add'])) {
    
    $month = $_POST['month'];
    $date = $_POST['date'];
    $event = $_POST['event'];
    
    $calendar_update_query = "INSERT INTO `$month`(`date`, `event`) VALUES('$date', '$event')";
    
    $calendar_update_result = mysqli_query($conn, $calendar_update_query);
    
    if(!$calendar_update_result) {
        
        die("Could not update academic calendar");
    }
    else {
        
        echo "Academic calendar successfully updated";
    }
}


?>