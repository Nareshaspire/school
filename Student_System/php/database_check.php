<?php

$host="localhost";

$user="root";

$password="";

$db="schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

if($data === false){
    die("connection error");
}

if(isset($_POST['apply']))
{
    $data_name = $_POST['name'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    $data_message = $_POST['message'];


    $sql = "insert into admission(name,email,phone,message) values ('$data_name','$data_email','$data_phone','$data_message')";

    $result = mysqli_query($data,$sql);

    if($result){
    //   $_SESSION['message'] = "your application sent successfully"; 
    // //   header("location:./index.php");

    $message= "<Your application sent!";

			$_SESSION['Message']=$message;

			header("location:../index.php");
      
    }

    else
    {
        echo "Apply Failed";
    }
}
?>