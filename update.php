<?php

    include './dbconn.php';

    $subject=$_GET['subject'];
    $csubject=$_POST['change_subject'];
    $cat=$_POST['cat'];
    $eng=$_POST['lang'];
    $professor=$_POST['professor'];
    $introduce=$_POST['introduce'];


    $query="UPDATE info SET subject = '$csubject', cat = '$cat', eng = '$eng', professor= '$professor', introduction='$introduce' where subject = '$subject'";
    echo $query;
    mysqli_query($connect, $query);
    echo"
    <script>
    location.href='./main.php';
    </script>
    ";

 ?>
