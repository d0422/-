
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

    include './dbconn.php';

    $cname=$_GET['name'];

    $query="SELECT * FROM resume where name = '$cname'";
    //echo $query;
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result)

?>

<script>
  function deldata() {
    location.href='./resume_delete.php?name=<? echo $cname ?>';
  }
</script>

    <center><h2> 입력된 데이터 </h2></center>
    <form name="frm_content" method="post" action="resume_update.php?name=<? echo $cname; ?>">
      <table align="center" width= "300" border="1" cellspacing="0" cellpadding="5">
      <tr align="center">
        <td bgcolor="#cccccc">경력이름</td>
        <td><input type="text" name="change_name" value="<? echo $row['name']; ?>"></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">경력시작일</td>
        <td><input type="date" name="startdate" value="<? echo $row['startdate'];?>"></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">경력종료일</td>
        <td><input type="date" name="enddate" value="<? echo $row['enddate'];?>"></td>
      </tr>
      <tr align="center">
        <td colspan="2" bgcolor="#cccccc">
            <input type="submit" value="수정">
            <input type="button" value="삭제" OnClick="deldata();">
        </td>
      </tr>
    </form>
