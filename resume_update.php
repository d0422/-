<?php

    include './dbconn.php';

    $name=$_GET['name'];
    $cname=$_POST['change_name'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];

    $query="UPDATE resume SET name = '$cname', startdate='$startdate', enddate='$enddate' where name = '$name'";
    echo $query;
    mysqli_query($connect, $query);
    echo"
    <script>
    location.href='./resume.php';
    </script>
    ";

 ?>
