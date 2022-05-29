<?php

    include './dbconn.php';

    $subject=$_POST['subject'];
    $cat=$_POST['cat'];
    $eng=$_POST['lang'];
    $professor=$_POST['professor'];
    $introduce=$_POST['introduce'];

    $query="INSERT into info(subject, cat, eng, professor, introduction ) values('$subject','$cat','$eng','$professor', '$introduce')";
    //echo $query;
    mysqli_query($connect, $query);
    echo"
    <script>
    location.href='./main.php';
    </script>
    ";

 ?>
