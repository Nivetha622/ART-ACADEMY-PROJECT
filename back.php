<?php
if(isset($_POST['submitt'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];

    echo $name.$email.$number.$address;

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'contact';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        echo"connection faied".mysqli_connect_error();
    }
    $sql = "INSERT INTO `help`(name,email,number,address) VALUES ('$name','$email','$number','$address')";
    $data = mysqli_query($conn,$sql);
    if($data){
        echo "You will be contacted shortly";
    }
    else{
        echo "Error Occured";
    }
}
else{
    echo "not submitted";
}
?>
