<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
<style>
body
{
  background-image: url('images/c11.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.myslides
{
	height: 530px;
	width:200%
}
.bottom-footer
{
	height:50px;
	width: 100%;
 	background-color: white;
}
.clglink
{
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	padding-bottom: 0px
}
</style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a></li>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysqli_query($conn,"select * from users where User_id='$id_session'");
	$row=mysqli_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['FullName']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Logout?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	<div class="slideshow">
  <img class="mySlides" src="images/c1.jpg">
  <img class="mySlides" src="images/c2.jpg">
  <img class="mySlides" src="images/c3.jpg">
  <img class="mySlides" src="images/c4.jpg"> 
  <img class="mySlides" src="images/c5.jpg"> 
  <img class="mySlides" src="images/c6.jpg"> 
  <img class="mySlides" src="images/c7.jpg">
  <img class="mySlides" src="images/c8.jpg"> 
  <img class="mySlides" src="images/c9.jpg"> 
  <img class="mySlides" src="images/c10.jpeg">
</div>
</br>

<div class="bottom-footer">

  <p class="clglink">
  Visit:-<a href="https://vignanits.ac.in/" target="_blank">vignanits.ac.in</a>                                       
<a href="https://www.facebook.com/vignanits/" target="_blank" class="facebook-page " title="facebook"  >
<i class="fa fa-facebook" style="margin-left: 858px ;margin-right: 6px ;"></i></a>
<a href="https://instagram.com/vignan.deshmukhi?igshid=1t01y8qnk75mz" target="_blank" class="insta-page" title="instagram"  >
<i class="fa fa-instagram" style="margin-left: 5px ;margin-right: 6px ;" ></i></a>
  </p>
</div>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>
