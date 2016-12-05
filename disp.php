<?php
		
		echo'
		<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style type="text/css">
  *{

  font-family:arial;
}
body{
	padding:10px;

}
.box{
	background-color:lightgrey;

	padding:10px;
}


  </style>
<body>
		';

	$l=mysql_connect("localhost","root","");
	mysql_select_db('inter');
	if(!$l){

		echo"error in connection ";
	}
	else{
		
	$sed=$_POST['btn'];
	$res="SELECT SNO,name,email,age FROM student WHERE SNO=$sed";
	$results = mysql_query($res,$l);
	if(!$results){

		echo"results is error";
	}
	else{
		if(mysql_num_rows($results)>0){
		while ($row = mysql_fetch_array($results)) {
  		$n=$row['name'];
  		$e=$row['email'];
  		$a=$row['age'];
  		echo'
  		<div class="text-center container-fluid">
  		<h3>Welcome Mr '.$n.' </h1>
  		<div class="col-sm-6 box">
  		<p>your Email id is <br>'.$e.'</p>
  		</div>
  		<div class="col-sm-6 box">
  		<p>your age  is :<br>'.$a.'</p>
  		</div>


</div>
<br><br>
<div class="text-center">
<button class="btn-primary btn-lg" onclick="location.href = \'result.php\'">Back To Table</button>
</div>
</body>
  		';

		    
	}
}
}
}
	
?>