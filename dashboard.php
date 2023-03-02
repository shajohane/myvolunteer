<?php
include("header.php");
if(!isset($_SESSION['staff_id']))
{
	echo "<script>window.location='index.php';</script>";
}
?>
</header>


<div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-12">
<div class="section-title">
	<center><h2 class="title">DASHBOARD</h2></center>
</div>
</div>



</div>

</div>

</div>


<div id="numbers" class="section">

<div class="container">

<div class="row">

	<div class="col-md-3 col-sm-6">
		<div class="number">
			<a href="viewalbum.php"><img src="img/albumlogo.png" style="width:100%;height: 150px;"></a>
			<h3>
			<?php
			$sql ="SELECT * FROM album";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Album Records</span>
		</div>
	</div>
	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/donorlogo.png" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM donor";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Donor Records</span>
		</div>
	</div>

	<div class="col-md-3 col-sm-6">
		<div class="number">
			<a href="viewmember.php"><img src="img/ngo_logo.jpg" style="width:100%;height: 150px;"></a>
			<h3>
			<?php
			$sql ="SELECT * FROM member ";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Registered NGO Records</span>
		</div>
	</div>

		<div class="col-md-3 col-sm-6">
		<div class="number">
			<a href="viewstaff.php"><img src="img/stafflogo.jpg" style="width:100%;height: 150px;"></a>
			<h3>
			<?php
			$sql ="SELECT * FROM staff ";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Staff Records</span>
		</div>
	</div>

		<div class="col-md-3 col-sm-6">
		<div class="number">
			<a href="viewfund.php"><img src="img/event-logo.png" style="width:100%;height: 150px;"></a>
			<h3>
			<?php
			$sql ="SELECT * FROM fund_raiser";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Event Records</span>
		</div>
	</div>

			<div class="col-md-3 col-sm-6">
		<div class="number">
			<a href="viewform.php"><img src="img/volunteerlogo.png" style="width:100%;height: 150px;"></a>
			<h3>
			<?php
			$sql ="SELECT * FROM form";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Volunteers Applied</span>
		</div>
	</div>

<!-- 	
	<div class="col-md-3 col-sm-6">
		<div class="number">
			<img src="img/fundcollect.jpg" style="width:100%;height: 150px;">
			<h3>
			<?php
			$sql ="SELECT * FROM fund_collection ";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
			</h3>
			<span>Fund Collection Donor Records</span>
		</div>
	</div> -->

</div>

</div>

</div>

<?php
include("footer.php");
?>