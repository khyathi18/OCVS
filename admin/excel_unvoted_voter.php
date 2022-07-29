<?php
  require_once('connect.php');
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Voters_unvoted_List.xls" );
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
  header("Pragma: public");
	  
	 ?>

<table>
  <thead>
    <tr>
      <th>FullName</th>
      <th>UserName</th>
      <th>RollNumber</th>
      <th>Year</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $qryreport = mysqli_query($conn,"SELECT * FROM voters where `Status` ='Unvoted'") or die(mysqli_error());
	
    $sqlrows=mysqli_num_rows($qryreport);
    WHILE ($reportdisp=mysqli_fetch_array($qryreport)) {
    ?>
    <tr>
      <td><?php echo $reportdisp['FullName'] ?></td>
      <td><?php echo $reportdisp['Username'] ?></td>
      <td><?php echo $reportdisp['RollNumber'] ?></td>
      <td><?php echo $reportdisp['Year'] ?></td>
      <td><?php echo $reportdisp['Status'] ?></td>
    <?php } ?>
  </tbody>
</table>