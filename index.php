<!DOCTYPE html>
<html> 
	<head> 
		<title> Giải Phương Trình Bậc Nhất</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			$result = '';
			if (isset($_POST['calculate']))	
			{
				$a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
				$b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
				$c = isset($_POST['c']) ? (float)trim($_POST['c']) : '';
				if ($a == 0){
					if($b==0){
						if($c==0){
							$result=" Vô số nghiệm";
						}
						else{
							$result=" Vô nghiệm";
						}
					}
					else{
						$result= -$b/$c;
					}
				}
				else{
					$delta=$b**2 - 4*$a*$c;
					if ($delta > 0){
						$result= ((-$b - sqrt($delta))/(2*$a))." và ".((-$b + sqrt($delta))/(2*$a));
					}
					elseif($delta==0){
						$result= "Nghiệm kép:".(-$b/(2*$a));
					}
					else{
						$result= "Vô nghiệm" ;
					}
				}
			}
		?>
		<h1>Giai phương trình bậc Hai</h1>
		<form method="post" action="">
			<input type="text" style="width: 20px" name="a" value=""/>x^2
			+
			<input type="text" style="width: 20px" name="b" value=""/>x
			+
			<input type="text" style="width: 20px" name="c" value=""/>=0
			<br/>
			<input type="submit" name="calculate" value="Tính"/>
		</form>
		<?php  echo ' x là:',$result; ?>
	</body>
</html>