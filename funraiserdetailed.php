<?php
session_start();
include("header.php");


$sql = "SELECT * FROM fund_raiser where status='Active' AND fund_raiser_id='$_GET[fund_raiser_id]'";
$qsql = mysqli_query($con,$sql);
$rs = mysqli_fetch_array($qsql);

?>

</header>

<div id="cta" class="section">

<div class="section-bg" style="background-image: url(img/charity/downloadfile.jpg);" data-stellar-background-ratio="0.5"></div>


<div class="container">

<div class="row">

<div class="col-md-offset-2 col-md-8">
<div class="cta-content text-center">
<h1>EVENTS</h1>
</div>
</div>

</div>

</div>

</div>



<div class="section">

<div class="container">

<div class="row">

<main id="main" class="col-md-9">

<div class="article causes-details">

<h2 class="article-title"><?php echo $rs['title']; ?></h2>
<div class="article-img">
<?php
		if($rs['banner_img'] == "")
		{
			echo "<img src='img/no-image-icon.png' style='height: 500px;'>";
		}
		else if(file_exists("imgfundraiser/".$rs['banner_img']))
		{
			echo "<img src='imgfundraiser/".$rs['banner_img']. "'  style='height: 500px;'>";
		}
		else
		{
			echo "<img src='img/no-image-icon.png' style='height: 500px;' >";	
		}
		?>
</div>

<div class="causes-content">
		<h3><a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>"><?php echo  $rs['title']; ?></a></h3>
		<p><?php echo  $string = substr($rs['fund_raiser_description'],0,1000).''; ?></p>
<br>
		<a href="form.php">Interested in joining for volunteering?</a>
		<a href="<?php echo  $string = substr($rs['website'],0,1000).''; ?>" class="primary-button causes-donate">Donate Now</a>
		</div>
	</div>
</div>

<!--  <div class="article-reply">
<h3>Interested in joining for Volunteering?</h3>
<p>Leave your contact details, we will contact you if there are available positions. </p>
<form method="post" action=""  onsubmit="return validateform()">

<div class="row">
<div class="col-md-4">
<div class="form-group">
<input class="input" placeholder="Name" type="text">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<input class="input" placeholder="Email" type="email">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<input class="input" placeholder="Phone Number" type="text">
</div>
</div>

<button class="primary-button">Submit</button>
</div>
</div>
</form>
</div>  -->

<!--  <?php  
/*
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql ="UPDATE form set fname='$_POST[fname]',femail='$_POST[femail]',fnum='$_POST[fnum]'  WHERE fid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Record updated successfully.');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}		
	}
	else
	{
	$sql ="INSERT INTO form(fid,fname,femail,fnum) VALUES('$_POST[fid] ','$_POST[fname] ','$_POST[femail]','
				$_POST[fnum]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('We will contact you soon.');</script>";
		echo "<script>window.location='fundraiser.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
}
?>

<?php
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM form WHERE fid='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
*/
?>  -->

 
<!-- <div class="article-reply">
<h3>Interested in joining for Volunteering?</h3>
<p>Leave your contact details, we will contact you if there are available positions. </p>
<form>

<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="text" name="fname" id="fname" class="form-control" placeholder="Name" 
				value="<?php echo $rsedit['fname']; ?>">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<input type="text" name="femail" id="femail" class="form-control" placeholder="Email" 
				value="<?php echo $rsedit['femail']; ?>">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<input type="text" name="fnum" id="fnum" class="form-control" placeholder="Phone Number" 
				value="<?php echo $rsedit['fnum']; ?>">
</div>
</div>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"></div>
	<div class="col-md-10">
		<input type="submit" name="submit" id="submit" class="form-control btn btn-success" style="width: 200px;">
	</div>
</div>
</div>
</form>
</div>  -->
 


</div>

</div>

</div>

<?php
include("footer.php");
?>