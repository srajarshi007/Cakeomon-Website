<?php
    $to="cakeomon@gmail.com";
    $sub=$_POST['Subject'];
    $message1 = "Cake Order for ".$_POST['Name']." Email: ".$_POST['Email']." Specifications:".$_POST['message'];
    $mailsent = mail($to,$sub,$message1);
    if ($mailsent)
        echo "ORDER SUCCESFUL";
    else
        echo "";
?>