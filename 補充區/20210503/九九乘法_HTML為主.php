<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>99</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1" width="80%" align="center">
		<?php for($i=1;$i<=9;$i++){?>
		<tr align='center'>
			<?php for($j=1;$j<=9;$j++){?>
			<td><?php echo $i."X".$j."=".($i*$j);}}?></td>
		</tr>
	 </table>
</body>
</html>