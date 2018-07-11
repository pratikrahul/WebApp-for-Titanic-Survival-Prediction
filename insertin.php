<?php

	$con=mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not connected to Server';
	}

	if(!mysqli_select_db($con,'dgga'))
	{
		echo 'Database not selected';
	}
	
	$Pclass=$_POST['pclass'];
	$Sex=$_POST['sex'];
	$Age=$_POST['age'];
	$Sibsp=$_POST['sibsp'];
	$Parch=$_POST['parch'];
	$Fare=$_POST['fare'];
	$Embarked=$_POST['embarked'];
	
	$comm="TRUNCATE TABLE test";
	
	if(!mysqli_query($con,$comm))
	{
		echo 'Not cleared';
	}
	
	$sql="INSERT INTO test(Pclass,Sex,Age,Siblings,Parch,Fare,Embarked) VALUES('$Pclass','$Sex','$Age','$Sibsp','$Parch','$Fare','$Embarked')";
	

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
	//	echo 'Inserted';
	}
	
	
	$res = exec("python_script.py");
	//echo 'Entered python_script';
	echo $res;
	//header("refresh:10,url=index.html");	
	
	
?>