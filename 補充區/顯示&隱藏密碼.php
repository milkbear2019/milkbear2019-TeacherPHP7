<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script><!--CDN-->
	</head>
	<body>
		<form action="" method="get" accept-charset="utf-8">
			<input type="password" name="passwd" id="passwd">
			<input type="button" name="btn1" id="btn1" value="顯示密碼">
		</form>
		<script>
			$("#btn1").on("click", function() {
			if($("#passwd").attr("type")=="text")
			{
				$("#passwd").attr("type","password");
				$("#btn1").attr("value","顯示密碼")
			}else{
				$("#passwd").attr("type","text");
				$("#btn1").attr("value","隱藏密碼")
			}
			});
			
		</script>
	</body>
</html>