<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- title of the site -->
  <title>Synergy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>
    html {
    background: url("");
          -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: #000;
}
    body{
          padding-top: 60px;
  background: transparent;
  font-size: 1.6em;
    }
    
    div.row {
  background-color: rgba(180, 175, 175, 0.8);
  border-radius: 30px;
  padding: 10px;
  margin: 10px;
    }
    
.btn {
  background-color: #4827a2;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}

.btn:hover {opacity: 1}
</style>
</head>
<body>


<div class="row">
   <h1 style="text-align: center; color: #d1124d"><strong>Please select one of the following:</strong></h1>
   <br>
   <br>
   <div class="col-sm-2"><p> </p></div>
    <div class="col-sm-3">
        <img src="images/studentgly.png">
        <br>
        <br>
        <br>
        <input type="button" class="btn" value="  Student  " style="color: white" onclick="window.location.href='login/slogin.php'">
    </div>
    <div class="col-sm-2">
        <p>  </p>
    </div>
    <div class="col-sm-3">
        <img src="images/admingly.png">
        <br>
        <br>
        <br>
        <input type="button" class="btn" value="  Admin  " style="color: white" onclick="window.location.href='login/alogin.php'">
        <br>
        <br>
    </div>
</div>

<br>
<br>
 <br>
 <br>
 


 <!-- footer-->
<div class="footer" style="background-color: black">
    <br>
    <p style="text-align: center">Created with <span class="glyphicon glyphicon-heart" style="color: red"></span> by <a href="http//www.namanlazarus02.wixsite.com/elit">ELIT</a></p>
    <br>
    </div>
</body>
</html>