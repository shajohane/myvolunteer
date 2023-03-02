<?php
session_start();
?>
<?php
include("header.php");
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql ="UPDATE fund_raiser set title='$_POST[title]','$_POST[banner_img]',fund_raiser_description='$_POST[fund_raiser_description]',website='$_POST[website]',status='$_POST[status]' WHERE fund_raiser_id='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)

		{
			echo "<script>alert('Event updated successfully.');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	
	else
	{
		$sql ="INSERT INTO  fund_raiser(fund_raiser_id,title,banner_img,fund_raiser_description,website,status) VALUES('$_POST[fund_raiser_id]','$_POST[title]','$_POST[banner_img]','$_POST[fund_raiser_description]','$_POST[website]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)

	{
		echo "<script>alert('Event record inserted successfully.');</script>";
		echo "<script>window.location='fund.php';</script>";
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
	$sqledit = "SELECT * FROM fund_raiser WHERE fund_raiser_id='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
?>

<div id="page-header">

<div class="section-bg" style="background-image: url(img/header4.png);"></div>


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="header-content">
<h1>Events</h1>
</div>
</div>
</div>
</div>

</div>

</header>


<div class="section" style="padding-top: 1px;">

<div class="container">

<div class="row">

<main id="" class="col-md-12">

<div class="">



<div class="">


<div class="article-comments">

<div class="media">
<div class="media-left">
<img class="media-object" src="img/event-logo.png"  style="width: 100px;height: 100px;">
</div>
<div class="media-body">
	<div class="media-heading">
	<h4>Events</h4>
	</div>
	<p>
<form method="post" action="" onsubmit="return validateform()"> 
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Title </div>
	<div class="col-md-10">
		<input type="text" name="title"  id="title" class="form-control" value="<?php echo $rsedit['title']; ?>">
		<span id="errtitle" class="errorclass"></span>
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Banner Image</div>
	<div class="col-md-10">
		<input type="file" name="banner_img"  id="banner_img" class="form-control" >
		<span id="errbanner_img" class="errorclass"></span>
<?php
if($rsedit['banner_img'] == "")
{
}
else if(file_exists("imgfundraiser/".$rsedit['banner_img']))
{
	echo "<img src='imgfundraiser/".$rsedit['banner_img']. "' style='width: 250px;height: 250px;' >";
}
?>
	</div>
</div>

<br>


<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Description</div>
	<div class="col-md-10">
	<textarea type="text" name="fund_raiser_description"  id="fund_raiser_description" class="form-control" value="<?php echo 
	$rsedit['fund_raiser_description']; ?>"></textarea>
	<span id="errfund_raiser_description" class="errorclass"></span>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Donation Website</div>
	<div class="col-md-10">
	<input type="text" name="website" id="website" class="form-control" value="<?php echo $rsedit['website']; ?>">
	<span id="errwebsite" class="errorclass"></span>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Status</div>
	<div class="col-md-10">
		<select class="form-control" name="status" id="status">
			<option value="">Select Status</option>
			<?php
			$arr = array("Active","Inactive");
			foreach($arr as $val )
			{
				if($val == $rsedit['status']){echo "<option value='$val' selected>$val</option>";} else {echo "<option value='$val'>$val</option>";}
			}
				
			
			?>
		</select><span id="errstatus" class="errorclass"></span>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;"></div>
	<div class="col-md-10">
		<input type="submit" name="submit" id="submit" class="form-control btn btn-success" style="width: 200px;">
	</div>
</div>
</form>
	</p>
	</div>
</div>


</div>


</div>

</main>

</div>

</div>

</div>
<?php
include("footer.php");
?>

<script src="https://cdn.tiny.cloud/1/vkp7vwptosm1ao2ztjqdp0riscxgp2sxw81z6ma02p9h4oqc/tinymce/5/tinymce.min.js" ></script>
<!-- <script>tinymce.init({ selector:'textarea' });</script> -->
<script>
function validateform()
{
	var i = 0;	
	$('.errorclass').html('');
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var alphaSpaceNumericExp = /^[0-9a-zA-Z\s]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	if(!document.getElementById("title").value.match(alphaSpaceNumericExp))
	{
		document.getElementById("errtitle").innerHTML = "Entered title not valid...";
		i = 1;
	}
	if(document.getElementById("title").value=="")
	{
		document.getElementById("errtitle").innerHTML = "Kindly enter title...";
		i = 1;
	}
	if(document.getElementById("banner_img").value=="")
	{
		document.getElementById("errbanner_img").innerHTML = "Kindly enter banner image...";
		i = 1;
	}
	if(document.getElementById("fund_raiser_description").value=="")
	{
		document.getElementById("errfund_raiser_description").innerHTML = "Kindly enter fund raiser description...";
		i = 1;
	}
	if(document.getElementById("start_date").value=="")
	{
		document.getElementById("errstart_date").innerHTML = "Kindly enter the Start date...";
		i = 1;
	}
	if(document.getElementById("end_date").value=="")
	{
		document.getElementById("errend_date").innerHTML = "Kindly enter End date...";
		i = 1;
	}
	
	if(!document.getElementById("fund_amount").value.match(numericExp))
	{
		document.getElementById("errfund_amount").innerHTML = "Entered Fund Amount is not valid...";
		i = 1;
	}
	if(document.getElementById("fund_amount").value=="")
	{
		document.getElementById("errfund_amount").innerHTML = "Kindly enter the Fund amount...";
		i = 1;
	}
	
		
	if(document.getElementById("status").value=="")
	{
		document.getElementById("errstatus").innerHTML = "kindly select status...";
		i = 1;
	}
	
	if(i == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>