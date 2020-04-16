
<?php 
session_start();
  if(!isset($_SESSION['uname'])){
    $_SESSION['msg']= "you must login first ";
    header("location: ../index.php");
  }
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['uname']);
    header("location: ../index.php");
  }
?>
<?php include('../header.php');?>
<?php include("usernav.php");?>
<?php include("db.php");?>
<div class="container">
	<form  action="process.php"  enctype="multipart/form-data" method="POST">
	<div class="controls">
<label for="usr">Arrive:</label>
<div class="form-control">
<label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
<input type="date"  class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>" />
</div>
</div><br>

<div class="controls">
<label for="usr">Depart:</label>
<div class="form-control">
<label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
<input type="date"  class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
</div>
</div><br>


<div class="controls">
<label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
<select class="floatLabel" name="people">
<option value="blank"></option>
<option value="1">1</option>
<option value="2" selected>2</option>
<option value="3">3</option>
</select>
</div></div><br><br> 


<div>
<button type="submit"  class=" btn btn-primary" name="reg_user1">
ADD 
</button>

</div><br><br>
</form>
  
</div>