<?php
    include_once("config.php");

    
    $id = $_GET['id'];
    
    
    $result = mysqli_query($mysqli, "DELETE FROM writer_tb WHERE id=$id");
    
    
    header("Location:index.php?page=writer");
?>