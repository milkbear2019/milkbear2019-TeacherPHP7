<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);//顯示錯誤訊息的型別
require_once("connMysql.php");
session_start();
//函式：自動產生指定長度的密碼
function MakePass($length) {
  $possible = "0123456789!@#$%^&*()_+abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $str = "";
  while(strlen($str)<$length){
  $str .= substr($possible, rand(0, strlen($possible)-1), 1);
  }
  return($str);
}
//檢查是否經過登入，若有登入則重新導向
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")){
  //若帳號等級為 member 則導向會員中心
  if($_SESSION["memberLevel"]=="member"){
    header("Location: member_center.php");
  //否則則導向管理中心
  }else{
      header("Location: member_admin.php");
  }
}
//檢查是否為會員
if(isset($_POST["m_username"])){
  $muser = $_POST["m_username"];
  //找尋該會員資料
  $query_RecFindUser = "SELECT m_username, m_email FROM memberdata WHERE m_username='{$muser}'";
  $RecFindUser = $db_link->query($query_RecFindUser);
  if ($RecFindUser->num_rows==0){
    header("Location: admin_passmail.php?errMsg=1&username={$muser}");
    }else{
  //取出帳號密碼的值
    $row_RecFindUser=$RecFindUser->fetch_assoc();
    $username = $row_RecFindUser["m_username"];
    $usermail = $row_RecFindUser["m_email"];
    //產生新密碼並更新
    $newpasswd = MakePass(10);
    $mpass = password_hash($newpasswd, PASSWORD_DEFAULT);
    $query_update = "UPDATE memberdata SET m_passwd='{$mpass}' WHERE m_username='{$username}'";
    $db_link->query($query_update);
    //補寄密碼信
          require_once('PHPMailer/PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
          $mail= new PHPMailer(); //初始化一個PHPMailer物件
          $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
          $mail->IsSMTP(); //設定使用SMTP方式寄信
          $mail->SMTPAuth = true; //啟用SMTP驗證模式
          $mail->Username = "milkbear2019@gmail.com"; //您的 gamil 帳號(可改)
          $mail->Password = ""; //您的 gmail 密碼(可改)
          $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式)
          $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
          $mail->CharSet = "utf-8"; //郵件編碼
          $mail->From = "milkbear2019@gmail.com"; //寄件者信箱
          $mail->FromName = "網站管理員"; //寄件者姓名
          $mail->AddAddress($usermail); //收件人郵件
          $mail->IsHTML(true); //郵件內容為html
          $mail->Subject = "你所申請的新密碼"; //郵件標題
          $mail->Body = "你的新密碼:". $newpasswd; //郵件內容
         if(!$mail->send()) {
                header("Location: admin_passmail.php?mailStats=1");
            } 
  }
}
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>網站會員系統</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php if(isset($_GET["mailStats"]) && ($_GET["mailStats"]=="1")){?>
    <script>alert('密碼信補寄成功！');window.location.href='index.php';</script>
    <?php }?>
    <table width="780" border="0" align="center" cellpadding="4" cellspacing="0">
      <tr>
        <td class="tdbline"><img src="images/mlogo.png" alt="會員系統" width="164" height="67"></td>
      </tr>
      <tr>
        <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
          <tr valign="top">
            <td class="tdrline"><p class="title">歡迎光臨網站會員系統</p>
            <p>感謝各位來到會員系統， 所有的會員功能都必須經由登入後才能使用，請您在右方視窗中執行登入動作。</p>
            <p class="heading"> 本會員系統擁有以下的功能：</p>
            <ol>
              <li>免費加入會員 。</li>
              <li>每個會員可修改本身資料。</li>
              <li>若是遺忘密碼，會員可由系統發出電子信函通知。</li>
              <li>管理者可以修改、刪除會員的資料。</li>
            </ol>
            <p class="heading">請各位會員遵守以下規則： </p>
            <ol>
              <li> 遵守政府的各項有關法律法規。</li>
              <li> 不得在發佈任何色情非法， 以及危害國家安全的言論。</li>
              <li>嚴禁連結有關政治， 色情， 宗教， 迷信等違法訊息。</li>
              <li> 承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
              <li> 互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
              <li> 管理員擁有一切管理權力。</li>
            </ol></td>
            <td width="200">
              <div class="boxtl"></div><div class="boxtr"></div><div class="regbox">
              <?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
              <div class="errDiv">帳號「 <strong><?php echo $_GET["username"];?></strong>」沒有人使用！</div>
              <?php }?>
              <p class="heading">忘記密碼？</p>
              <form name="form1" method="post" action="">
                <p>請輸入您申請的帳號，系統將自動產生一個十位數的密碼寄到您註冊的信箱。</p>
                <p><strong>帳號</strong>：<br>
                  <input name="m_username" type="text" class="logintextbox" id="m_mail"></p>
                  <p align="center">
                    <input type="submit" name="button" id="button" value="寄密碼信">
                    <input type="button" name="button2" id="button2" value="回上一頁" onClick="window.history.back();">
                  </p>
                </form>
                <hr size="1" />
                <p class="heading">還沒有會員帳號?</p>
                <p>註冊帳號免費又容易</p>
                <p align="right"><a href="member_join.php">馬上申請會員</a></p></div>
                <div class="boxbl"></div><div class="boxbr"></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center" background="images/album_r2_c1.jpg" class="trademark">© 2016 eHappy Studio All Rights Reserved.</td>
          </tr>
        </table>
      </body>
    </html>