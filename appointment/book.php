<?php
if(isset($_POST['submitt'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $people=$_POST['people'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $number=$_POST['number'];


    

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'appointment';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        echo"connection faied".mysqli_connect_error();
    }
    $sql = "INSERT INTO `booking`(name,email,people,time,date,number) VALUES ('$name','$email','$people','$time','$date','$number')";
    $data = mysqli_query($conn,$sql);
    if($data){
        echo "Save the date to join us...";
    }
    else{
        echo "Error Occured";
    }
}
else{
    echo "not submitted";
}
?>
