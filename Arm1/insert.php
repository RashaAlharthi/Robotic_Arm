      <?php
      $conn= new mysqli("localhost","root","","robot_arm");
	   $stmt=$conn->prepare("insert into arm (motor1,motor2,motor3,motor4,motor5,power)values(?,?,?,?,?,?)");
      $stmt->bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$On );
      $Base = $_POST['Base'];
      $Shoulder = $_POST['Shoulder'];
      $Elbow = $_POST['Elbow'];
      $Wrist = $_POST['Wrist:'];
      $Gripper = $_POST['Gripper'];
      $On = $_POST['On'];
	  $stst->execute();
	  echo "Done" ;
    $stmt->close();
    $conn->close();
	  ?>
