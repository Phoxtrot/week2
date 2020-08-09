<?php
  include '../../index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" />
    
</head>
<body>   
    <div class="container">

<form class="well form-horizontal" action="index.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
<br>
</div>
<div class="text-danger"><?php echo $err["first_name"]; ?></div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
<div class="text-danger"><?php echo $err["last_name"]; ?></div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
  </div>
<div class="text-danger"><?php echo $err["email"]; ?></div>  
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">Department / Office</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="department" class="form-control selectpicker">
  <option value="">Select your Department/Office</option>
  <option value="IT">IT</option>
  <option value="HR">HR</option>
  <option value="Name" >Staff</option>          
</select>
</div>
<div class="text-danger"><?php echo $err["department"]; ?></div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Date</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="DOB" placeholder="" class="form-control"  type="date">
</div>
<div class="text-danger"><?php echo $err["date"]; ?></div>

</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Favorite Color</label> 
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="favcolor" placeholder="" class="form-control"  type="color">
  </div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label" >Gender</label> 
<div class="form-check form-check-inline">
    <input  name="gender" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Male">
    <label class="form-check-label" for="inlineCheckbox1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input  name="gender" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Female">
    <label class="form-check-label" for="inlineCheckbox2">Female</label>
  </div>
<div class="text-danger"><?php echo $err["gender"]; ?></div>
  
</div>  

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="password" placeholder="Password" class="form-control"  type="password">
</div>
<div class="text-danger"><?php echo $err["password"]; ?></div>
</div>
</div>
<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-warning" name="submit">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

    </form>
</body>
</html>
