<?php
$emailErrorMsg = "";
$passwordErrorMsg ="";
if(isset($_POST["submit"])){
    $emailValue = $_POST["emailName"];
    $passwordValue = $_POST["passName"];
    if($emailValue == ""){
      $emailErrorMsg ="Email must be filled out !";
    }
    else if(!preg_match("/\w+(@emsi.ma){1}$/",$emailValue)){
        $emailErrorMsg = "Please enter a valid emsi email";
    }
     if( $passwordValue == ""){
        $passwordErrorMsg = "Password must be filled out!";
    
    }
    if($emailErrorMsg =="" && $passwordErrorMsg =="") {
        session_start();
        $_SESSION["emailS"]=$emailValue;
        $_SESSION["passS"]=$passwordValue;
        header("Location:home.php");
    }
    
}
?>