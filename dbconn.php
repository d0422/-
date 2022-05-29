<?
     $host_name = "localhost";
     $db_user_id = "root";
     $db_pwd = "";
     $db_name = "assignment";

     $connect = mysqli_connect($host_name, $db_user_id, $db_pwd, $db_name);
     /* check connection */
     if ($connect->connect_error) {
       printf("Connect failed: %s\n", $connect->connect_error);
       exit();
     }
?>
