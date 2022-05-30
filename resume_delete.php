<?php

//    error_reporting(E_ALL);
//    ini_set("display_errors", 1);

    include './dbconn.php';

    $id=$_GET['name'];

    $query="DELETE from resume where name = '$id'";
    echo $query;
    mysqli_query($connect, $query);

    echo"
    <script>
    location.href='./resume.php';
    </script>
    ";

 ?>
