<?php

    include './dbconn.php';
    $name=$_POST['name'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    echo $startdate;
    $query="INSERT into resume(name, startdate, enddate ) values('$name','$startdate','$enddate')";
    //echo $query;
    mysqli_query($connect, $query);
    echo"
    <script>
    location.href='./resume.php';
    </script>
    ";
 ?>
