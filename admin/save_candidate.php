<?php
include('dbcon.php');
if (isset($_POST['save'])){


$rfullname=$_POST['rfullname'];
$rrollnumber=$_POST['rrollnumber'];
$rusername=$_POST['rusername'];
$rgender=$_POST['rgender'];
$ryear=$_POST['ryear'];
$rpwd=$_POST['rpwd'];
$rposition=$_POST['rposition'];
$party=$_POST['party'];
$user_name=$_POST['user_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
	if ($rposition=="Governor"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','a')") or die(mysqli_error());		

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());		

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}

//


	if ($rposition=="Vice-Governor"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','b')") or die(mysqli_error());	

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)	
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());	

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}



	if ($rposition=="1st Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','c')") or die(mysqli_error());		

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());	

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}

//
	if ($rposition=="2nd Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','d')") or die(mysqli_error());		

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());	

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}


//


	if ($rposition=="3rd Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','e')") or die(mysqli_error());		

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());	

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}
//




	if ($rposition=="4th Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysqli_query($conn,"insert into candidate (FullName,RollNumber,Year,Position,Gender,Photo,Party,abc)
			values('$rfullname','$rrollnumber','$ryear','$rposition','$rgender','$location','$party','f')") or die(mysqli_error());		

mysqli_query($conn,"insert into users (FullName,UserName,Password,User_Type)
			values('$rfullname','$rusername','$rpwd','Candidate')") or die(mysqli_error());	

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfullname', 'Added Candidate', NOW(),'$user_name')")or die(mysqli_error());

header('location:candidate_list.php');
}



}
?>