<?php

$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="school";
 
foreach($db as $key => $value){
	define(strtoupper($key),$value);
	
}
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

include("function.php");
//if($conn) echo "conn";
if(isset($_POST['display_marks'])){
    $display_batch=$_GET['display_batch'];
    $delete_marks = "SELECT * FROM $batch";
    $delete_result = mysqli_query($conn,$delete_marks);
    ?>
    <div class="form-group row">
	<?php echo "<h3><b>Batch: </b> $display_batch </h3>";
        echo "<h3><b>Exam: </b>$test</h3>";
    ?>
    <br>
	<table class="table">
			<thead>
				<tr>
					<th>Roll no</th>
					<th>Sub 1</th>
					<th>Sub 2</th>
					<th>Sub 3</th>
					<th>Sub 4</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php
	while($row = mysqli_fetch_array($select_query)){ 
		 $roll_no = $row['rollno'];
		$sub1 = $row['sub1'];
		$sub2 = $row['sub2'];
		$sub3 = $row['sub3'];
		$sub4 = $row['sub4'];
		
		echo "<tr>";
		echo "<td>  $roll_no</td>";
		echo "<td>  $sub1 </td>";
		echo "<td>  $sub2 </td>";
		echo "<td>  $sub3 </td>";
		echo "<td>  $sub4 </td>";
		echo "<td><a href='edit_mark.php?roll_no={$roll_no}&class={$std}'>Edit</a></td>";
		echo "</tr";	
		
					
					
		?>
		
				
				
			</tbody>
			<?php } /*while*/ ?> 
		</table>
</div>
		

<?php	}  /*isset*/ ?>