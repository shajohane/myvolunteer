<?php
session_start();

include("header.php");
if(isset($_POST['submit']))
	{
		$sql ="INSERT INTO form(fname,femail,fnum) VALUES('$_POST[fname]','$_POST[femail]','$_POST[fnum]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Form submitted succesfully, we will contact you soon. Thank you.');</script>";
			echo "<script>window.location='form.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
?>

<div id="page-header">

<div class="section-bg" style="background-image: url(img/header4.png);"></div>


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="header-content">
<h1>Volunteering Form</h1>
<h3>Interested in joining as volunteer?</h3>
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
<img class="media-object" src="img/register.png"  style="width: 100px;height: 100px;">
</div>
<div class="media-body">
	<div class="media-heading">
	<h4>User Contact Details</h4>
	</div>
	<p>
<form method="post" action=""  onsubmit="return validateform()">
<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Full Name</div>
	<div class="col-md-10"> 
	<input type="text" name="fname"  id="fname" class="form-control" value="<?php echo $_POST['fname']; ?>" >
	<span id="errname" class="errorclass"></span>
	</div>
</div>
<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Email </div>
	<div class="col-md-10">
	<input type="text" name="femail" id="femail" class="form-control" value= "<?php echo $_POST['femail']; ?>">
	<span id="errfemail" class="errorclass"></span>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-2" style="padding-top: 5px;">Contact Number </div>
	<div class="col-md-10">
	<input type="text" name="fnum" id="fnum" class="form-control" value="<?php echo $_POST['fnum']; ?>">
	<span id="errfnum" class="errorclass"></span>
	</div>
</div>

<!-- 
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
		</select>
	<span id="errstatus" class="errorclass"></span>
	</div>
</div> -->

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
<script>
function validateform()
{
	var i = 0;	
	$('.errorclass').html('');
	if(document.getElementById("fname").value == "")
	{
		document.getElementById("errfname").innerHTML = "Please provide full name";
		i=1;
	}
	
	if(document.getElementById("femail").value == "")
	{
		document.getElementById("errfemail").innerHTML = "Please provide email address";
		i=1;
	}
	
	if(document.getElementById("fnum").value == "")
	{
		document.getElementById("errfnum").innerHTML = "Please provide contact number";
		i=1;
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