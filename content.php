
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

    include './dbconn.php';

    $csubject=$_GET['subject'];

    $query="SELECT * FROM info where subject = '$csubject'";
    //echo $query;
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result)

?>

<script>
  function deldata() {
    location.href='./delete.php?subject=<? echo $csubject ?>';
  }
</script>

    <center><h2> 입력된 데이터 </h2></center>
    <form name="frm_content" method="post" action="update.php?subject=<? echo $csubject; ?>">
      <table align="center" width= "300" border="1" cellspacing="0" cellpadding="5">
      <tr align="center">
        <td bgcolor="#cccccc">과목</td>
        <td><input type="text" name="change_subject" value="<? echo $row['subject']; ?>"></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">선택</td>
        <td><label for="cat1">교양</label>
      <input id="cat1" name="cat" type="radio" value="1"  checked="<?if($row['cat'] == "1"){ echo "checked"; }?>"/>
      <br><label for="cat2">전공</label>
      <input id="cat2" name="cat" type="radio" value="2"  checked="<?if($row['cat'] == "1"){ echo "checked"; }?>"/>
      <br><label for="cat3">전공필수</label>
      <input id="cat3"name="cat" type="radio" value="3"  checked="<?if($row['cat'] == "1"){ echo "checked"; }?>"/></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">교수명</td>
        <td><input type="text" name="professor" value="<? echo $row['professor']; ?>"></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">과목소개</td>
        <td><textarea name="introduce"><? echo $row['introduction']; ?></textarea></td>
      </tr>
      <tr align="center">
        <td bgcolor="#cccccc">영어 A</td>
        <? if ($row['eng']=='on'){
          echo "<td><label><input type='checkbox' name='lang' checked='checked'> 영어A</label></td>";
        }
          else{
            echo "<td><label><input type='checkbox' name='lang'> 영어A</label></td>";
          }
        ?>
      </tr>
      <tr align="center">
        <td colspan="2" bgcolor="#cccccc">
            <input type="submit" value="수정">
            <input type="button" value="삭제" OnClick="deldata();">
        </td>
      </tr>
    </form>
