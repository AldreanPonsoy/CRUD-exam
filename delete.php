<?php
    include('conn.php');
    if(isset($_POST['id'])){
        $id=$_POST['id'];
 
        $conn->query("delete from members where id='$id'");
    }
?>