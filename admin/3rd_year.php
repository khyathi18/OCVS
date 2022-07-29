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
</style>

</head>

<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
 
<div class="home_body">

<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li  class="active"><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
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
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
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
	
	<div id="element" class="hero-body">
       <div class="pagination">
    <ul>

    <li><a href="candidate_list.php"><font color="white">All</font></a></li>
    <li><a href="candidate_for_governor.php"><font color="white">Governor</font></a></li>
    <li><a href="candidate_for_vice-governor.php"><font color="white">Vice-Governor</font></a></li>
    <li><a href="1st_year.php"><font color="white">1st Year Representative</font></a></li>
    <li><a href="2nd_year.php"><font color="white">2nd Year Representative</font></a></li>
    <li  class="active"><a href="3rd_year.php"><font color="white">3rd Year Representative</font></a></li>
    <li><a href="4th_year.php"><font color="white">4th Year Representative</font></a></li>
   
 
  
    </ul>
	

    </div>

	<div class="pagination">
		  <ul>

    <li><a href="new_candidate.php"><font color="white"><i class="icon-plus icon-large"></i>Add Candidates</font></a></li>
  
    </ul>
	</div>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Party</th>
				<th>FullName</th>
				<th>RollNumber</th>
				<th>Year</th>
				<th>Actions</th>
				
				</tr>
			</thead>
			<tbody>

<?php $candidate_query=mysqli_query($conn,"select  * from candidate where Position='3rd Year Representative'");
		while($candidate_rows=mysqli_fetch_array($candidate_query)){ $id=$candidate_rows['CandidateID'];
		$fl=$candidate_rows['FullName'];
	
		?>

<tr class="del<?php echo $id ?>">
	<td align="center"><?php echo $candidate_rows['Party']; ?></td>
	<td><?php echo $candidate_rows['FullName']; ?></td>
	<td><?php echo $candidate_rows['RollNumber']; ?></td>
	<td align="center"><?php echo $candidate_rows['Year']; ?></td>
	<td width="240" align="center">
	<a class="btn btn-Success" href="edit_candidate.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
	<a class="btn btn-danger1" id="<?php echo $id; ?>"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>&nbsp;
	</td>

<input type="hidden" name="data_name" class="data_name<?php echo $id ?>" value="<?php echo $candidate_rows['FullName']; ?>"/>
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>	
	</div>		
</div>
<input type="hidden" class="pc_date" name="pc_date"/>
<input type="hidden" class="pc_time" name="pc_time"/>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
	
	var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
	
	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		var pc_date = $('.pc_date').val();
		var pc_time = $('.pc_time').val();
		var data_name = $('.data_name'+id).val();
		var user_name = $('.user_name').val();
		
		if(confirm("Are you sure you want to delete this Candidate?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_candidate.php",
			data: ({id: id,pc_time:pc_time,pc_date:pc_date,data_name:data_name,user_name:user_name}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>

