<?php
// Starting Session
session_start();
$err= array('first_name' =>"", 'last_name' =>"", 'email' =>"", 'department' =>"",
    			'date' =>"", 'favcolor' =>"", 'gender' =>"", 'password' =>"");
if (isset($_POST["submit"])) {
    
    // First Name validation
    if(empty($_POST["first_name"])){
    	$err['first_name']= 'This field is necessary';
    }
    else{
    	$_SESSION['first_name'] = $_POST['first_name'];    	

    }
    // Last Name validation
    if(empty($_POST["last_name"])){
    	$err['last_name']= 'This field is necessary';
    }
    else{
    	$_SESSION['last_name'] = $_POST['last_name'];
    	    	
    }
    // Email validation
    if(empty($_POST["email"])){
    	$err['email']= 'This field is necessary';
    }
    else{
    	$_SESSION['email'] = $_POST['email'];
    }
    // Department validation
    if(empty($_POST["department"])){
    	$err['department']= 'Select at least one department';
    }
    else{
    	$_SESSION['department'] = $_POST['department'];
    	
    }
    // Date validation
    if(empty($_POST["DOB"])){
    	$err['date']= 'This field is required';    	
    }
    else{
    	$_SESSION['date'] = $_POST['DOB'];
    	
    }
    // Gender validation
    if(empty($_POST["gender"])){
    	$err['gender']= 'Select at least one gender';
    }
    else{
    	$_SESSION['gender'] = $_POST['gender'];
    	
    }
    // Color
    if(!empty($_POST["favcolor"])){
    	$_SESSION['favcolor'] = $_POST['favcolor'];
    }
    
    //password validation         
    if(!empty($_POST["password"])){
    	
        if (strlen($_POST["password"]) <= '15') {
            $err["password"] = "Your Password Must Contain the following"."<br>". "At Least 15 characters"."<br>"."At Least one Number"."<br>"."At Least one Capital Letter !"."<br>"." At Least one Lowercase Letter !"."<br>"." At Least one Special Character !"."<br>";           
        }
        elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
            $err["password"] = "Your Password Must Contain the following"."<br>". "At Least 15 characters"."<br>"."At Least one Number"."<br>"."At Least one Capital Letter !"."<br>"." At Least one Lowercase Letter !"."<br>"." At Least one Special Character !"."<br>";
            
        }
        elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
            $err["password"] = "Your Password Must Contain the following"."<br>". "At Least 15 characters"."<br>"."At Least one Number"."<br>"."At Least one Capital Letter !"."<br>"." At Least one Lowercase Letter !"."<br>"." At Least one Special Character !"."<br>";
            
        }
        elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
            $err["password"] = "Your Password Must Contain the following"."<br>". "At Least 15 characters"."<br>"."At Least one Number"."<br>"."At Least one Capital Letter !"."<br>"." At Least one Lowercase Letter !"."<br>"." At Least one Special Character !"."<br>";
            
        }
        elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
            $err["password"] = "Your Password Must Contain the following"."<br>". "At Least 15 characters"."<br>"."At Least one Number"."<br>"."At Least one Capital Letter !"."<br>"." At Least one Lowercase Letter !"."<br>"." At Least one Special Character !"."<br>";
            
        }
    }else{
        $err["password"] = "Please Enter your password"."<br>";        
    }
  $fix = "";   
 if (array_filter($err)) {
        echo "fix error";
     }
     else{
         header("Location: show.php");
     } 
}


?>
