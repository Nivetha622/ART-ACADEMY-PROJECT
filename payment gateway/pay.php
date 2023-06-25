<?php
if(isset($_POST['submitt'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $cname=$_POST['cname'];
    $camount=$_POST['camount'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $cardname=$_POST['cardname'];
    $ccnumber=$_POST['ccnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];


   

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'payment';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        echo"connection faied".mysqli_connect_error();
    }
    $sql = "INSERT INTO `amount`(fullname,email,cname,camount,address,city,state,zip,cardname,ccnumber,expmonth,expyear,cvv) VALUES ('$fullname','$email','$cname','$camount','$address','$city','$state','$zip','$cardname','$ccnumber','$expmonth','$expyear',' $cvv')";
    $data = mysqli_query($conn,$sql);
    if($data){
        echo "Paid Successfully";
    }
    else{
        echo "Error Occured";
    }
}
else{
    echo "not submitted";
}
?>
