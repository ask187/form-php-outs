<?php      

echo'
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>';
	$l=mysql_connect("localhost","root","");
	mysql_select_db('inter');
	if(!$l){

		echo"error in connection ";
	}
	else{
		    
	$res="SELECT SNO,name,email,age FROM student";
	$results = mysql_query($res,$l);
	if(!$results){

		echo"results is error";
	}
	else{
	echo '<table class="table table-bordered">
    <tr><th>SNO</th><th>Name</th><th>Email</th><th>Age</th><th>View</th>
    </tr>';
	if(mysql_num_rows($results)>0)
{
   
while ($row = mysql_fetch_array($results)) {
   $s=$row['SNO'];
   
    echo '
    <form action="disp.php" method="POST">
        <tr>
            <td>'.$row['SNO'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['age'].'</td>
            <td><button value="'.$s.'" type="submit" name="btn" id="btn" >View</button></td>
        </tr>';

}

echo '</form>
</table>';


	$query=mysql_query($res,$l);
	if( !$query){
		echo"not successfull";
	}

	}
}
}
?>