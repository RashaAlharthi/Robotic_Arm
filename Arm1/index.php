<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=stylesheet href="style2.css"/>
</head>
<body>
  <div class="container">
  <form action="insert.php" method="post">
    <p class="title">Contorl Panel <img src="arm-pic.jpg" alt="robot arm" style= "width:60px;height:60px;"> </p>

    <div class="slidecontainer">
      <h4>Base: <label><span class="limit"></span></label>  </h4>
      <input type="range" name= "Base" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Shoulder: <label><span class="limit"></span></label>    </h4>
      <input type="range" name= "Shoulder" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Elbow: <label><span class="limit"></span></label>  </h4>
      <input type="range" name="Elbow" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>



    <div class="slidecontainer">
      <h4>Wrist: <label><span class="limit"></span></label>  </h4>
      <input type="range" name="Wrist" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>




    <div class="slidecontainer">
        <h4>Gripper: <label><span class="limit"></span></label> </h4>
      <input type="range" name = "Gripper" value="0" min="0" max="180"  step="1" class="slider" >
    </div>

    <div class="label-container">
      <div class="label-slider">0</div>
	  <div class="label-slider">90</div>
      <div class="label-slider">180</div>
    </div>
  <button class="button button2">
  <input type="button" name = "save"> Save</button>
<button class="button button2">
<input type="button" name = "On"> On</button>
</form>
<script type="text/javascript" src="sc.js"></script>
</body>
</html>
