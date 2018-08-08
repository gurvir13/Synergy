<?php




if(isset($_POST['submit'])) {
    $msg = "First line of text\nSecond line of text";
    $to = "namanlazarus02@gmail.com";
    $subject = wordwrap($_POST['counter_select'], 70);
    $body = $_POST['msg'];
    $header = $_POST['email'];
    
    // send email
mail($to,$subject,$body,$header);
}

?>