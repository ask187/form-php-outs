<?php
		
		if ($_POST['action'] == 'inpu') {
       

	$l=mysql_connect("localhost","root","");
	mysql_select_db('inter');
	if(!$l){

		echo"error in connection ";
	}
	else{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	echo "$name <br>$email<br>$age<br>";
		    
	$res="INSERT INTO student(SNO,name,email,age) values ('NULL','$name','$email','$age')";
	$query=mysql_query($res,$l);
	if( !$query){
		echo"not successfull";
	}
	else
	{	
			   	
		header("location:result.php");
		exit();		 
	}
	}
}
else if ($_POST['action'] == 'show') {

	header("location:result.php");
	exit();
}
	
?>