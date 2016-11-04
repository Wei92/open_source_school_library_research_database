<!DOCTYPE html>
<html>
<head>
	<title>OSSLRD</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="top">
	<div class="top-inner">
		<div class="logo1"><a href="index.php"><img src="images/logo.png"></a></div>
		<div class="logo2"><a href="index.php">Open Source School Library Research Database</a></div>
	</div>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript">

function change(a){
	if (a==1){
		$(".student").attr("id","hover");
		$(".researcher").attr("id","");
		$(".btn-addrecords").hide();
		$(".hi-s").show();
		$(".hi-r").hide();
	}else{
		$(".student").attr("id","");
		$(".researcher").attr("id","hover");
		$(".btn-addrecords").show();
		$(".hi-r").show();
		$(".hi-s").hide();
	}
}
</script>
