<?php
    include_once("konfig.php");

    $id = $_GET['id'];
    
    $result = mysqli_query($mysqli, "DELETE FROM pengguna WHERE id=$id");

    header("Location:index.php");
?>