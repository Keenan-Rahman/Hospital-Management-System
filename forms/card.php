<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css">
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	 border-radius: 5px; /* 5px rounded corners */
	 width:250px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
	
}
/* Add rounded corners to the top left and the top right corner of the image */
img {
    border-radius: 5px 5px 0 0;
	height:200px;
	width:200px;
}
</style>
</head>

<body>
<div class="card">
  <img src="doctor-1295581_960_720.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php session_start(); echo $_SESSION['rec_reg_user'] ?></b></h4> 
    <p>Receptionist</p> 
  </div>
</div>
</body>
</html>