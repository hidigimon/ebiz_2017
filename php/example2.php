<?
	switch ($_POST['operator']) {
		case "+":
			$result=$_POST['val01']+$_POST['val02'];
			print $_POST['val01']." + ".$_POST['val02']." = ".$result;
			break;
		case "-":
			$result=$_POST['val01']-$_POST['val02'];
			print $_POST['val01']." - ".$_POST['val02']." = ".$result;
			break;
		case "*":
			$result=$_POST['val01']*$_POST['val02'];
			print $_POST['val01']." * ".$_POST['val02']." = ".$result;
			break;
		case "/":
			$result=$_POST['val01']/$_POST['val02'];
			print $_POST['val01']." / ".$_POST['val02']." = ".$result;
			break;
		default :
			print "삐빅! 계산기가 고장났습니다!";
			break;
	}						
?>