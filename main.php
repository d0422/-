<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
<title>과목 입력</title>
<script>
  function checkform() {
    document.review_table.submit();
  }
</script>
<style>
  div{
    margin: 10px;
  }
</style>
</head>
<body>
<center>
  <form action='./post.php' name='review_table' method='post'>
<br>
<br>
<table align="center" width= "300" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" align="center" bgcolor="#cccccc"><b>과목입력</b></td>
  </tr>
<tr>
  <td><label for="subject">과목명</label></td>
  <td><input id="subject" name="subject" type="text"/></td>
</tr>
<tr>
  <td>과목 유형</td>
  <td><label for="cat1">교양</label>
  <input id="cat1" name="cat" value="1" type="radio"/>
  <br><label for="cat2">전공</label><input id="cat2" name="cat" value="2" type="radio"/>
  <br><label for="cat3">전공필수</label><input id="cat3"name="cat" value="3" type="radio"/>
  </td>
</tr>
<tr>
  <td><label> 영어A</label></td>
  <td><input type="checkbox" name="lang" ></td>
</tr>
<tr>
  <td><label for="professor">교수명</label></td>
  <td><input id="professor" name ="professor" type="text"/></td>
</tr>
<tr>
      <td><label for="textarea">과목소개</label></td>
      <td><textarea name="introduce"></textarea></td>
</tr>
      </table>
      <input type="button" value="제출" Onclick="checkform();" /><br />
</form>

<BR><BR>

  <h2> 입력된 데이터 </h2>
  <table width= "1200" border="1" cellspacing="0" cellpadding="5">
  <tr align="center">
    <td bgcolor="#cccccc">과목명</td>
    <td bgcolor="#cccccc">과목유형</td>
    <td bgcolor="#cccccc">교수명</td>
    <td bgcolor="#cccccc">영어A 여부</td>
    <td bgcolor="#cccccc">과목소개</td>
  </tr>

  <?
  include './dbconn.php';

  $query="SELECT * from info";
  // echo $query;
  $result = mysqli_query($connect, $query);

  while ($row = mysqli_fetch_array($result)) {
    if ($row['cat']==1){
      $output="교양";
    }
    elseif($row['cat']==2){
      $output="전공";
    }
    else{
      $output="전공필수";
    }
    if ($row['eng']=='on'){
      $eng="영어A강의";
    }
    else{
      $eng="한국어";
    }
    echo "
    <tr>
      <td><a href='content.php?subject=$row[subject]'>$row[subject]</a></td>
      <td>$output</td>
      <td>$row[professor]</td>
      <td>$eng</td>
      <td>$row[introduction]</td>
    </tr>
    ";
  }
  mysqli_close($connect);
  ?>
</table>
</center>
</body>

</html>
