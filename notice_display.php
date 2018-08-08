<?php
                    
    $mysql_hostname  =  "localhost";
    $mysql_user  =  "root"; 
    $mysql_password  =  "";
    $mysql_database  =  "synergy";

    $conn  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database); 
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
   
   $query = "SELECT * FROM notices";
   $result = mysqli_query($conn, $query);
   while($row = mysqli_fetch_array($result))
            { ?>
						<!-- News Posts Small -->
						<div class="news_post_small">
						<?php echo "<h4 style='font-family: serif'>" . $row['notice1'] . "</h4>"; ?>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
						<?php echo "<h4 style='font-family: serif'>" . $row['notice2'] . "</h4>"; ?>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
						<?php echo "<h4 style='font-family: serif'>" . $row['notice3'] . "</h4>"; ?>
						</div>

						<!-- News Posts Small -->
						<div class="news_post_small">
						<?php echo "<h4 style='font-family: serif'>" . $row['notice4'] . "</h4>"; ?>
						</div>
   <?php }
      mysqli_close($conn);
    ?>