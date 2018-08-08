<?php

$db['db_host']="localhost";
	$db['db_user']="root";
	$db['db_pass']="";
	$db['db_name']="synergy";

	foreach($db as $key => $value){
		define(strtoupper($key),$value);

	}
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit'])){
	$slot1_mon = $_POST['monday1'];
	$slot2_mon = $_POST['monday2'];
	$slot3_mon = $_POST['monday3'];
	$slot4_mon = $_POST['monday4'];
	$slot5_mon = $_POST['monday5'];
    
    $slot1_tue = $_POST['tuesday1'];
    $slot2_tue = $_POST['tuesday2'];
    $slot3_tue = $_POST['tuesday3'];
    $slot4_tue = $_POST['tuesday4'];
    $slot5_tue = $_POST['tuesday5'];
    
    $slot1_wed = $_POST['wednesday1'];
    $slot2_wed = $_POST['wednesday2'];
    $slot3_wed = $_POST['wednesday3'];
    $slot4_wed = $_POST['wednesday4'];
    $slot5_wed = $_POST['wednesday5'];
    
    $slot1_thu = $_POST['thursday1'];
    $slot2_thu = $_POST['thursday2'];
    $slot3_thu = $_POST['thursday3'];
    $slot4_thu = $_POST['thursday4'];
    $slot5_thu = $_POST['thursday5'];
    
    $slot1_fri = $_POST['friday1'];
    $slot2_fri = $_POST['friday2'];
    $slot3_fri = $_POST['friday3'];
    $slot4_fri = $_POST['friday4'];
    $slot5_fri = $_POST['friday5'];
    
    $slot1_sat = $_POST['saturday1'];
    $slot2_sat = $_POST['saturday2'];
    $slot3_sat = $_POST['saturday3'];
    $slot4_sat = $_POST['saturday4'];
    $slot5_sat = $_POST['saturday5'];
       

	
	$query = "INSERT INTO `timetable` (`mon_slot1`,`mon_slot2`, `mon_slot3`, `mon_slot4`, `mon_slot5`, `tue_slot1`, `tue_slot2`, `tue_slot3`, `tue_slot4`, `tue_slot5`, `wed_slot1`, `wed_slot2`, `wed_slot3`, `wed_slot4`, `wed_slot5`, `thu_slot1`, `thu_slot2`, `thu_slot3`, `thu_slot4`, `thu_slot5`, `fri_slot1`, `fri_slot2`, `fri_slot3`, `fri_slot4`, `fri_slot5`, `sat_slot1`, `sat_slot2`, `sat_slot3`, `sat_slot4`, `sat_slot5`) VALUES ('$slot1_mon', '$slot2_mon', '$slot3_mon', '$slot4_mon','$slot5_mon', '$slot1_tue', '$slot2_tue', '$slot3_tue', '$slot4_tue', '$slot5_tue', '$slot1_wed', '$slot2_wed', '$slot3_wed', '$slot4_wed', '$slot5_wed', '$slot1_thu', '$slot2_thu', '$slot3_thu', '$slot4_thu', '$slot5_thu', '$slot1_fri', '$slot2_fri', '$slot3_fri', '$slot4_fri', '$slot5_fri', '$slot1_sat', '$slot2_sat', '$slot3_sat', '$slot4_sat', '$slot5_sat')";
	
	$create_table_query = mysqli_query($conn,$query);
	
	if(!$create_table_query){
		die(mysqli_error($conn));
	}
	else{
		echo "submitted";
	}
	
	
		
		
		
}

elseif(isset($_POST['reset'])){
	$query = " DELETE FROM `timetable`";
	$delete_query = mysqli_query($conn,$query);
	
	if(!$delete_query){
		die(mysqli_error($conn));
		
	}
	else{
		header("Location:profile.php ");
	
	}
	
	
}

/* NOtice and Calendar section */

elseif(isset($_POST['reset_notice'])) {
	$notice_del_query = " DELETE FROM `notices`";
	$notice_del_result = mysqli_query($conn,$notice_del_query);
	
	if(!$notice_del_result){
		die(mysqli_error($conn));
		
	}
	else{
		header("Location:profile.php ");
        echo "Database successfully updated";
	
	}
}


?>