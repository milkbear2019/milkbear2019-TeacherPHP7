 <?php
        if(!isset($_POST['mailfrom'])) header("Location:formtomail.php");//如果直接執行本頁時則跳回formtomail.php頁執行
        error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);//顯示錯誤訊息的型別
        require_once('PHPMailer/PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
        $mail= new PHPMailer(); //初始化一個PHPMailer物件
        $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
        $mail->IsSMTP(); //設定使用SMTP方式寄信
        $mail->SMTPAuth = true; //啟用SMTP驗證模式
        $mail->Username = "milkbear2016@gmail.com"; //您的 gamil 帳號
        $mail->Password = ""; //您的 gmail 密碼
        $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式)
        $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
        $mail->CharSet = "utf-8"; //郵件編碼
        
        $mail->From = $_POST['mailfrom']; //寄件者信箱
        //$mail->FromName = "牛奶熊"; //寄件者姓名
        $mail->AddAddress($_POST['mailto'], ""); //收件人郵件和名稱
        $mail->AddCC($_POST['mailcc']); //設定 副本收件人
        $mail->AddBCC($_POST['mailbcc']); //設定 密件副本收件人
        
        $mail->IsHTML(true); //郵件內容為html
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //添加附件(若不需要則註解掉就好)
        
        $mail->Subject = $_POST['mailsubject']; //郵件標題
        $mail->Body = $_POST['mailcontent']; //郵件內容
        $mail->AltBody = '當收件人的電子信箱不支援html時，會顯示這串~~';
        
        /*if(!$mail->send()) {
        echo '信件發送失敗!!';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        echo '信件已發送!!';
        }*/
        ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>線上郵寄系統</title>
    <style type="text/css">
    <!--
    body {
      margin: 0px;
      background-image: url(images/formtomail_bg.png);
      background-repeat: repeat-x;
      background-position: top;
      font-size: 10pt;
      background-color: #99CCCC;
    }
    form {
      margin: 0px;
    }
    #contentDiv {
      margin-right: auto;
      margin-left: auto;
      width: 520px;
      background-image: url(images/mailmark.png);
      background-repeat: no-repeat;
      background-position: right top;
    }
    #siteinfo {
      font-size: 9pt;
      text-align: center;
      font-family: Tahoma, Geneva, sans-serif;
      color: #333;
    }
    .info {
      font-size: 11pt;
      background-color: #FF6;
      background-image: url(images/icon_info.png);
      background-repeat: no-repeat;
      background-position: 5px center;
      padding-top: 5px;
      padding-right: 5px;
      padding-bottom: 5px;
      padding-left: 24px;
      color: #F00;
      border-radius: 10px;
      width: 480px;
      margin-right: auto;
      margin-bottom: 10px;
      margin-left: auto;
      margin-top: 10px;
    }
      .showdata { font-size: 11pt;
      line-height: 150%;
      font-weight: normal;
      color: #F60;
      font-family: Arial, Helvetica, sans-serif;
    }
    -->
    </style>
    <script type="text/javascript">
    <!--
    function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
    }
    function YY_checkform() { //v4.66
    //copyright (c)1998,2002 Yaromat.com
    var args = YY_checkform.arguments; var myDot=true; var myV=''; var myErr='';var addErr=false;var myReq;
    for (var i=1; i<args.length;i=i+4){
      if (args[i+1].charAt(0)=='#'){myReq=true; args[i+1]=args[i+1].substring(1);}else{myReq=false}
      var myObj = MM_findObj(args[i].replace(/\[\d+\]/ig,""));
      myV=myObj.value;
      if (myObj.type=='text'||myObj.type=='password'||myObj.type=='hidden'){
      if (myReq&&myObj.value.length==0){addErr=true}
      if ((myV.length>0)&&(args[i+2]==1)){ //fromto
      var myMa=args[i+1].split('_');if(isNaN(myV)||myV<myMa[0]/1||myV > myMa[1]/1){addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==2)){
      var rx=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-z]{2,4}$");if(!rx.test(myV))addErr=true;
      } else if ((myV.length>0)&&(args[i+2]==3)){ // date
      var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);
      if(myAt){
      var myD=(myAt[myMa[1]])?myAt[myMa[1]]:1; var myM=myAt[myMa[2]]-1; var myY=myAt[myMa[3]];
      var myDate=new Date(myY,myM,myD);
      if(myDate.getFullYear()!=myY||myDate.getDate()!=myD||myDate.getMonth()!=myM){addErr=true};
      }else{addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==4)){ // time
      var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);if(!myAt){addErr=true}
      } else if (myV.length>0&&args[i+2]==5){ // check this 2
      var myObj1 = MM_findObj(args[i+1].replace(/\[\d+\]/ig,""));
      if(myObj1.length)myObj1=myObj1[args[i+1].replace(/(.*\[)|(\].*)/ig,"")];
      if(!myObj1.checked){addErr=true}
      } else if (myV.length>0&&args[i+2]==6){ // the same
      var myObj1 = MM_findObj(args[i+1]);
      if(myV!=myObj1.value){addErr=true}
      }
      } else
      if (!myObj.type&&myObj.length>0&&myObj[0].type=='radio'){
      var myTest = args[i].match(/(.*)\[(\d+)\].*/i);
      var myObj1=(myObj.length>1)?myObj[myTest[2]]:myObj;
      if (args[i+2]==1&&myObj1&&myObj1.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
      if (args[i+2]==2){
      var myDot=false;
      for(var j=0;j<myObj.length;j++){myDot=myDot||myObj[j].checked}
      if(!myDot){myErr+='* ' +args[i+3]+'\n'}
      }
      } else if (myObj.type=='checkbox'){
      if(args[i+2]==1&&myObj.checked==false){addErr=true}
      if(args[i+2]==2&&myObj.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
      } else if (myObj.type=='select-one'||myObj.type=='select-multiple'){
      if(args[i+2]==1&&myObj.selectedIndex/1==0){addErr=true}
      }else if (myObj.type=='textarea'){
      if(myV.length<args[i+1]){addErr=true}
        }
        if (addErr){myErr+='* '+args[i+3]+'\n'; addErr=false}
        }
        if (myErr!=''){alert('The required information is incomplete or contains errors:\t\t\t\t\t\n\n'+myErr)}
        document.MM_returnValue = (myErr=='');
        }
        //-->
        </script>
      </head>
      <body bgcolor="#ffffff">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><img name="formtomail_r1_c1" src="images/formtomail_r1_c1.png" width="600" height="105" border="0" alt=""></td>
          </tr>
          <tr>
            <?php if($mail->send()) {?>
              <td background="images/formtomail_r2_c1.png"><div class="info">恭禧你，郵寄成功！</div>
            <?php }else{ ?> 
              <td background="images/formtomail_r2_c1.png"><div class="info">很遺憾，郵寄失敗！</div>
            <?php }?>
            <div id="contentDiv">
              <table width="100%" border="0" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="60"><strong> 寄件者</strong></td>
                  <td><?php echo $_POST['mailfrom'];?></td>
                </tr>
                <tr>
                  <td><strong> 收件者</strong></td>
                  <td><?php echo $_POST['mailto'];?></td>
                </tr>
                <tr>
                  <td><strong> 副本</strong></td>
                  <td><?php echo $_POST['mailcc'];?></td>
                </tr>
                <tr>
                  <td><strong> 密件副本</strong></td>
                  <td><?php echo $_POST['mailbcc'];?></td>
                </tr>
                <tr>
                  <td><strong>主旨</strong></td>
                  <td><?php echo $_POST['mailsubject'];?></td>
                </tr>
                <tr>
                  <td colspan="2"><?php echo nl2br($_POST['mailcontent']);?></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="button" name="button2" id="button2" value="再寄一封" onclick="window.history.back();"></td>
                </tr>
              </table>
            </div></td>
          </tr>
          <tr>
            <td height="52" background="images/formtomail_r4_c1.png"><div id="siteinfo">線上郵寄系統&nbsp;版權所有 &copy; 2017 Form PHPMAILER All Rights Reserved. </div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </body>
    </html>