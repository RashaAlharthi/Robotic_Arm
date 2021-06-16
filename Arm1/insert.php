<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
      <?php
	  $value1 = $_POST['value1'];
	  $value2  = $_POST['value2'];
	  $value3  = $_POST['value3'];
	  $value4  = $_POST['value4'];
	  $value5 = $_POST['value5'];
	  $value6  = $_POST['value6'];
	  $value7 = $_POST['value7'];
       $conn= new mysqli("localhost","root","","robot_arm");
	   $stmt=$conn->prepare("insert into arm (motor1,motor2,motor3,motor4,motor5,motor6,power)values(?,?,?,?,?,?,?);");
      $stmt=->bind_param("iiiiiii", $value1 ,$value2,$value3,$value4,$value5,$value6,$value7);
	  $stst->execute();
	  echo "Done" ;
	  ?>
</body>
</html>

