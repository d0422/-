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
  <form action='./resume_post.php' name='review_table' method='post'>
<br>
<br>
<table align="center" width= "300" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" align="center" bgcolor="#cccccc"><b>과목입력</b></td>
  </tr>
<tr>
  <td><label for="name">경력명</label></label></td>
  <td><input id="name" name="name" type="text"/></td>
</tr>
<tr>
  <td>시작일</td>
  <td><input name="startdate" type="date"></td>
</tr>
<tr>
  <td>종료일</td>
  <td><input name="enddate" type="date"></td>
</tr>
      </table>
      <input type="button" value="제출" Onclick="checkform();" /><br />
</form>

<BR><BR>

  <h2> 입력된 데이터 </h2>
  <table width= "1200" border="1" cellspacing="0" cellpadding="5">
  <tr align="center">
    <td bgcolor="#cccccc">경력명</td>
    <td bgcolor="#cccccc">시작일</td>
    <td bgcolor="#cccccc">종료일</td>
  </tr>

  <?
  include './dbconn.php';

  $query="SELECT * from resume";
  // echo $query;
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_array($result)){
  echo "
    <tr>
      <td><a href='resume_content.php?name=$row[name]'>$row[name]</a></td>
      <td>$row[startdate]</td>
      <td>$row[enddate]</td>
    </tr>
    ";
  }
  mysqli_close($connect);
  ?>
</table>
</center>
</body>

</html>
