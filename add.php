<?php
    include('conn.php');
    if(isset($_POST['productname'])){
        $productname=$_POST['productname'];
        $unit=$_POST['unit'];
        $price=$_POST['price'];
        $expired=$_POST['expired'];
        $inventory=$_POST['inventory'];
        $sales=$_POST['sales']
        $image=$_POST['image'];

        $conn->query("INSERT INTO items(`productname`, `unit`, `price`, `expired`, `inventory`, `sales`, `image`) VALUES ('$productname','$unit','$price','$expired','$inventory','$sales','$image')");
    }
?>