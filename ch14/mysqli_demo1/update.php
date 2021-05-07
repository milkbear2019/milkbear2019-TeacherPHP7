<?php
  include("connMysqlObj.php");
  if(isset($_POST["action"])&&($_POST["action"]=="update")){//如果按下"修改資料"按鈕則執行下列UPDATE SET的SQL指令
    $sql_query = "UPDATE students SET cName=?, cSex=?, cBirthday=?, cEmail=?, cPhone=?, cAddr=? ,cHeight=?, cWeight=? WHERE cID=?";
    $stmt = $db_link -> prepare($sql_query);
    $stmt -> bind_param("ssssssssi", $_POST["cName"], $_POST["cSex"], $_POST["cBirthday"], $_POST["cEmail"], $_POST["cPhone"], $_POST["cAddr"], $_POST['cHeight'], $_POST['cWeight'], $_POST["cID"]);
    $stmt -> execute();
    $stmt -> close();
    $db_link -> close();
    //重新導向回到主畫面
    header("Location: data.php");
  }
  //上面式子是使用SQL指令修改資料寫回資料庫
  //下列式子是在文字欄位顯示原始資料，等待修改
  $sql_select = "SELECT cID, cName, cSex, cBirthday, cEmail, cPhone, cAddr, cHeight, cWeight FROM students WHERE cID = ?";
  $stmt = $db_link -> prepare($sql_select);
  $stmt -> bind_param("i", $_GET["id"]);
  $stmt -> execute();
  $stmt -> bind_result($cid, $cname, $csex, $cbirthday, $cemail, $cphone, $caddr, $cheight, $cweight);
  $stmt -> fetch();
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>學生資料管理系統</title>
  </head>
  <body>
    <h1 align="center">學生資料管理系統 - 修改資料</h1>
    <p align="center"><a href="data.php">回主畫面</a></p>
    <form action="" method="post" name="formFix" id="formFix">
      <table border="1" align="center" cellpadding="4">
        <tr>
          <th>欄位</th><th>資料</th>
        </tr>
        <tr>
          <td>姓名</td><td><input type="text" name="cName" id="cName" value="<?php echo $cname;?>"></td>
        </tr>
        <tr>
          <td>性別</td><td>
          <input type="radio" name="cSex" id="radio" value="M" <?php if($csex=="M") echo "checked";?>>男
          <input type="radio" name="cSex" id="radio" value="F" <?php if($csex=="F") echo "checked";?>>女
        </td>
      </tr>
      <tr>
        <td>生日</td><td><input type="text" name="cBirthday" id="cBirthday" value="<?php echo $cbirthday;?>"></td>
      </tr>
      <tr>
        <td>電子郵件</td><td><input type="text" name="cEmail" id="cEmail" value="<?php echo $cemail;?>"></td>
      </tr>
      <tr>
        <td>電話</td><td><input type="text" name="cPhone" id="cPhone" value="<?php echo $cphone;?>"></td>
      </tr>
      <tr>
        <td>住址</td><td><input name="cAddr" type="text" id="cAddr" size="40" value="<?php echo $caddr;?>"></td>
      </tr>
      <tr>
        <td>身高</td><td><input name="cHeight" type="text" id="cHeight" size="4" value="<?php echo $cheight;?>"></td>
      </tr>
      <tr>
        <td>體重</td><td><input name="cWeight" type="text" id="cWeight" size="4"  value="<?php echo $cweight;?>"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input name="cID" type="hidden" value="<?php echo $cid;?>">
          <input name="action" type="hidden" value="update">
          <input type="submit" name="button" id="button" value="更新資料">
          <input type="reset" name="button2" id="button2" value="重新填寫">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
  $stmt -> close();
  $db_link -> close();
?>