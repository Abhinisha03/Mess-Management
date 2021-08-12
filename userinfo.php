<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'mess');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$suggest = $_POST['suggest'];

$query = "insert into userinfodata (user, email , mobile, suggest)
values ('$user', '$email', '$mobile', '$suggest')";

echo "$query";

mysqli_query($con,$query);




?>
