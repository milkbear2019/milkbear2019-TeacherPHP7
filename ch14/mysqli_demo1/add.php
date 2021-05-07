<?php
if(isset($_POST["action"])&&($_POST["action"]=="add")){//如果按下"新增資料"按鈕則執行下列INSERT INTO的SQL指令
  include("connMysqlObj.php");
  $sql_query = "INSERT INTO students (cName ,cSex ,cBirthday ,cEmail ,cPhone ,cAddr,cHeight,cWeight) VALUES (?, ?, ?, ? ,? ,?,?,?)";
  $stmt = $db_link -> prepare($sql_query);//執行$sql_query中的sql指令
  $stmt -> bind_param("ssssssss", $_POST["cName"], $_POST["cSex"], $_POST["cBirthday"], $_POST["cEmail"], $_POST["cPhone"], $_POST["cAddr"],$_POST['cHeight'],$_POST['cWeight']);//綁定參數
  $stmt -> execute();
  $stmt -> close();
  $db_link -> close();
  //重新導向回到主畫面
  header("Location: data.php");//新增完成前往data.php頁面
  }
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>學生資料管理系統</title>
  </head>
  <body>
    <h1 align="center">學生資料管理系統 - 新增資料</h1>
    <p align="center"><a href="data.php">回主畫面</a></p>
    <form action="" method="post" name="formAdd" id="formAdd">
      <table border="1" align="center" cellpadding="4">
        <tr>
          <th>欄位</th><th>資料</th>
        </tr>
        <tr>
          <td>姓名</td><td><input type="text" name="cName" id="cName"></td>
        </tr>
        <tr>
          <td>性別</td>
          <td>
            <input type="radio" name="cSex" id="radio" value="M" checked>男
            <input type="radio" name="cSex" id="radio" value="F">女
          </td>
        </tr>
        <tr>
          <td>生日</td><td><input type="text" name="cBirthday" id="cBirthday"></td>
        </tr>
        <tr>
          <td>電子郵件</td><td><input type="text" name="cEmail" id="cEmail"></td>
        </tr>
        <tr>
          <td>電話</td><td><input type="text" name="cPhone" id="cPhone"></td>
        </tr>
        <tr>
          <td>住址</td><td><input name="cAddr" type="text" id="cAddr" size="40"></td>
        </tr>
        <tr>
          <td>身高</td><td><input name="cHeight" type="text" id="cHeight" size="4"></td>
        </tr>
        <tr>
          <td>體重</td><td><input name="cWeight" type="text" id="cWeight" size="4"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input name="action" type="hidden" value="add">
            <input type="submit" name="button" id="button" value="新增資料">
            <input type="reset" name="button2" id="button2" value="重新填寫">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>