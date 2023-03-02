<?php
session_start();
?>
<?php
include("header.php");
if(!isset($_SESSION['staff_id']))
{
	echo "<script>window.location='index.php';</script>";
}
if(isset($_GET['delid']))
{
	$sql = "DELETE FROM form WHERE fid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Record deleted successfully.');</script>";
		echo "<script>window.location='viewform.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>
</header>
<div id="about" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="section-title">
			<center><h2 class="title">Volunteer Contact</h2></center>
			</div>
			</div>
		</div>
	</div>
</div>


<div id="numbers" class="section">

<div class="container">

<div class="row">

<div class="col-md-12 col-sm-12">
	<div class="number">

<table id="datatable"  class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Full Name</th>
			<th>Email Address</th>
			<th>Contact Number</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql = "SELECT * FROM form";
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<tr>
			<td style='text-align: left;'>$rs[fname]</td>
			<td style='text-align: left;'>$rs[femail]</td>
			<td style='text-align: left;'>$rs[fnum]</td>
			<td style='text-align: left;'>
			
			<a href='viewform.php?delid=$rs[0]' class='btn btn-danger' onclick='return confirmdel()' >Done</a>
			
			</td>
			</tr>";
	}
	?>		
	</tbody>
</table>

	</div>
</div>

</div>

</div>

</div>

<?php
include("footer.php");
?>

<script>
function confirmdel()
{
	if(confirm("Are you sure want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>