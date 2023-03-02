<?php
include("header.php");
if(!isset($_SESSION['donor_id']))
{
	echo "<script>window.location='index.php';</script>";
}
?>


<div id="home-owl" class="owl-carousel owl-theme">

<div class="home-item">

<div class="section-bg" style="background-image: url(img/header1.png);"></div>

<div class="home">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="home-content">
					<h1>MyVolunteer</h1>
					<p class="lead">One-stop platform for Malaysians, NGOs and volunteers to share and engage in helping out those in need.</p>
				</div>
			</div>
		</div>
	</div>
</div>

</div>


<div class="home-item">

<div class="section-bg" style="background-image: url(img/header3.png);"></div>


<div class="home">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="home-content">
<h1>MyVolunteer</h1>
<p class="lead">The unsung heroes of Malaysia, helping each other in all walks of life going through our toughest times.</p>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</header>

<div id="about" class="section">

<div class="container">

<div class="row">

<div class="col-md-5">
<div class="section-title">
<h2 class="title">MyVolunteer</h2>
<p class="sub-title">MyVolunteer is a Malaysian based platform for volunteers, NGOs, and citizens to contribute and share upcoming events, charity, fundraises, and activities. Almost like, the social media for volunteering and charity work. This is what brings us together as Malaysian.</p>
</div>
<div class="about-content">
<p>This is an online platform dedicated to enable, empower and serve NGOs. We champion effectiveness, transparency and sustainability, and we connect NGOs to information, resources, experts, volunteers and grants. Above all, we connect NGOs to each other, to inspire collaboration to solve society’s problems together.</p>
<a href="about.php" class="primary-button">Read More</a>
</div>
</div>


<div class="col-md-offset-1 col-md-6">
<a href="#" class="about-video" style="height: 550px;">
<img src="img/charity/IMG_20191210_124518.jpg" alt="">
</a>
</div>

</div>

</div>

</div>

<!--
<div id="numbers" class="section">

	<div class="container">

	<div class="row">

		<div class="col-md-3 col-sm-6">
		<div class="number">
		<i class="fa fa-smile-o"></i>
		<h3>
			<?php
			$sql ="SELECT * FROM donor";
			$qsql = mysqli_query($con,$sql);
			echo mysqli_num_rows($qsql);
			?>
		</h3>
		<span>Donors</span>
		</div>
		</div>


		<div class="col-md-3 col-sm-6">
		<div class="number">
		<i class="fa fa-heartbeat"></i>
		<h3>
		<?php
		$sql ="SELECT * FROM member";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_num_rows($qsql);
		?>
		</h3>
		<span>Members</span>
		</div>
		</div>


		<div class="col-md-3 col-sm-6">
		<div class="number">
		<i class="fa fa-money"></i>
		<h3><?php
		$sql ="SELECT sum(paid_amt) FROM fund_collection";
		$qsql = mysqli_query($con,$sql);
		$rs = mysqli_fetch_array($qsql);
		echo "MYR ".round($rs[0]);
		?></h3>
		<span>Donated</span>
		</div>
		</div>


		<div class="col-md-3 col-sm-6">
		<div class="number">
		<i class="fa fa-handshake-o"></i>
		<h3><?php
		$sql ="SELECT * FROM food_donor";
		$qsql = mysqli_query($con,$sql);
		$rs = mysqli_fetch_array($qsql);
		echo mysqli_num_rows($qsql);
		?></h3>
		<span>Food donors</span>
		</div>
		</div>


	</div>

	</div>

</div>
-->

<div id="cta" class="section">

<div class="section-bg" style="background-image: url(img/charity/downloadfile.jpg);" data-stellar-background-ratio="0.5"></div>


<div class="container">

<div class="row">

<div class="col-md-offset-2 col-md-8">
<div class="cta-content text-center">
<h1>Become a part of us</h1>
<a href="" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorLoginModal">Login</a>
<a href="" class="primary-button" onclick="return false" data-toggle="modal" data-target="#DonorRegisterModal">Sign Up</a>
</div>
</div>

</div>

</div>

</div>


<div id="events" class="section">

<div class="container">

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="section-title text-center">
<h2 class="title">MyVolunteer</h2>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.php">
<img src="img/banjir-1.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.php">Help people in need</a></h3>
<p>Provide direct support to an individual, family or community by offering financial aid</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.php">
<img src="img/emergency-1.jpg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.php">Take action in an emergency</a></h3>

<p>Raise funds in response to a natural disaster or humanitarian crisis. Make a difference in minutes.</p>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.php">
<img src="img/volunteer-1.jpeg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.php">Take part in a charity event</a></h3>

<p>Choose from hundreds of official events including marathons, bike rides, virtual runs, fundraising or donation.</p>
</div>
</div>
</div>


<div class="col-md-6">
<div class="event">
<div class="event-img">
<a href="single-event.php">
<img src="img/img2.jpeg" alt="">
</a>
</div>
<div class="event-content">
<h3><a href="single-event.php">Volunteering for the community</a></h3>
<p>Giving back to the community by contributing energy and time to help out those in need.</p>
</div>
</div>
</div>

</div>

</div>

</div>

<hr>

<div id="causes" class="section" style="padding: 5px;">

<div class="container">

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="section-title text-center">
<h2 class="title">Fund Raiser</h2>
<p class="sub-title">Fundraising or fund-raising is the process of seeking and gathering voluntary financial contributions by engaging individuals, businesses, charitable foundations, or governmental agencies</p>
</div>
</div>


<?php
	$sql = "SELECT * FROM fund_raiser where status='Active' order by fund_raiser_id DESC  limit 3";
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		/*
		$perc=0;
$sqlfund_collection = "SELECT SUM(paid_amt) FROM fund_collection where fund_raiser_id='$rs[0]' AND status='Active'";
$qsqlfund_collection = mysqli_query($con,$sqlfund_collection);
$rsfund_collection = mysqli_fetch_array($qsqlfund_collection);


 $perc = ($rsfund_collection[0] * 100 / $rs[fund_amount])
 */
?>
<div class="col-md-4">
	<div class="causes">
		<div class="causes-img">
		<a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>">		
		<?php
		if($rs['banner_img'] == "")
		{
			echo "<img src='img/no-image-icon.png' style='height: 300px;'>";
		}
		else if(file_exists("imgfundraiser/".$rs['banner_img']))
		{
			echo "<img src='imgfundraiser/".$rs['banner_img']. "'  style='height: 300px;'>";
		}
		else
		{
			echo "<img src='img/no-image-icon.png' style='height: 300px;' >";	
		}
		?>
		</a>
		</div>

		<!--
		<div class="causes-progress">
		<div class="causes-progress-bar">
		<div style="width: <?php echo $perc; ?>%;">
		<span><?php echo $perc ?>%</span>
		</div>
		</div>

		<div>
		<span class="causes-raised">Raised: <strong>MYR<?php echo $rsfund_collection[0]; ?></strong></span>
		<span class="causes-goal">Goal: <strong>MYR<?php echo $rs['fund_amount']; ?></strong></span>
		</div>
		</div>
			-->

		<div class="causes-content">
		<h3><a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>"><?php echo  $rs['title']; ?></a></h3>
		<p><?php echo  $string = substr($rs['fund_raiser_description'],0,100).'...'; ?></p>
		<a href="funraiserdetailed.php?fund_raiser_id=<?php echo $rs[0]; ?>" class="primary-button causes-donate">Donate Now</a>
		</div>
	</div>
</div>

<?php
	}
?>


<div class="clearfix visible-md visible-lg"></div>
</div>
<hr>
</div>

</div>


<div id="events" class="section">
<div class="section-title text-center">
<h2 class="title">Photo Gallery</h2>
</div>
<div class="container">

<div class="row">
<?php
$sqlgallery = "SELECT * FROM album WHERE status='Active' ORDER BY album_id DESC";
$qsqlgallery = mysqli_query($con,$sqlgallery);
while($rsgallery  = mysqli_fetch_array($qsqlgallery))
{
echo "<script type='text/javascript'>
    $(function(){
        //prepare Your data array with img urls
        var dataArray=new Array();";
	$sql = "SELECT * FROM photo WHERE album_id='$rsgallery[album_id]'";
	$qsql = mysqli_query($con,$sql);
	$ik=0;
	while($rs = mysqli_fetch_array($qsql))
	{		
        echo "dataArray[$ik]='imgphoto/$rs[photo]';";
		$ik = $ik + 1;
	}
		/*
        dataArray[1]='img/post-2.jpg';
        dataArray[2]='img/post-3.jpg';
        dataArray[3]='img/post-4.jpg';
        dataArray[4]='img/post-5.jpg';
		*/
echo "
        //start with id=0 after 5 seconds
        var thisId=0;

        window.setInterval(function(){
            $('#thisImg$rsgallery[0]').attr('src',dataArray[thisId]);
            thisId++; //increment data array id
            if (thisId==4) thisId=0; //repeat from start
        },2000);        
    });
</script>";
?>
	<div class="col-md-3">
		<div class="article">
		 <div class="article-img">
		<a href="displayphotos.php?album_id=<?php echo $rsgallery[0]; ?>">
<?php
	$sqlphoto = "SELECT * FROM photo WHERE album_id='$rsgallery[album_id]'";
	$qsqlphoto = mysqli_query($con,$sqlphoto);
	$ik=0;
	$rsphoto = mysqli_fetch_array($qsqlphoto);
?>		
			<img src="imgphoto/<?php echo $rsphoto[photo]; ?>" id='thisImg<?php echo $rsgallery[0]; ?>' alt="">
		</a>
		</div>
		<div class="article-content">
		<h3 class="article-title"><a href="displayphotos.php?album_id=<?php echo $rsgallery[0]; ?>"><?php echo $rsgallery[album_title]; ?></a></h3>
		<p><?php echo $rsgallery[album_description]; ?></p>
		</div>
		</div>
	</div>
<?php
}
?>
</div>

</div>

</div>

<?php
include("footer.php");
?>