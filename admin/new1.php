<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="profilepics"."/".$profilepic;
$sql=mysqli_query($con,"delete from tblusers where id=$rid");
unlink($ppicpath);
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
} 
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>New Arrivals</title>
<link rel="icon" type="image/x-icon" href="/image/Drivex.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DriveX">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/luxurycars.css">
<link rel="stylesheet" type="text/css" href="../styles/about_responsive.css">
<style>
    <?php include "../styles/luxury.css"?>
    <?php include "../styles/about_responsive.css"?>
    </style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">


		<!-- Main Navigation -->

		
		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><img src="../image/Drivex.png"></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="../index.php">home</a></li>
								<li class="main_nav_item"><a href="../about.php">about us</a></li>
								<li class="main_nav_item"><a href="../blog.php">blog</a></li>
								<li class="main_nav_item"><a href="../index.php#contact">Our Team</a></li>
								<li class="main_nav_item"><a href="../contact.php">contact us</a></li>
							</ul>
						</div>
						<div >
							
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>

		

			<div class="logo menu_logo"><img src="../image/Drivex.png" ></div>

			<ul>
				<li class="menu_item"><a href="../index.php">home</a></li>
				<li class="menu_item"><a href="../about.php">about us</a></li>
				<li class="menu_item"><a href="../blog.php">blog</a></li>
				<li class="menu_item"><a href="../index.php#contact">Feedback</a></li>
				<li class="menu_item"><a href="../contact.php">contact us</a></li>
			</ul>
		</div>
	</div>


	

	<!-- Intro -->

	<div class="intro">
		<div class="container">
		
				</div>
				
					<div class="intro_content">
						<div class="intro_title"><center>NEWLY ARRIVED CARS</center></div>
						
						<div><div></div><span></span><span></span><span></span></a></div>
					</div>
				</div>
				

			</div>
		</div>
	</div>
    
<!-- Start blog Area -->

<section class="blog-area section-gap" id="blog">

	<div class="container">
    
		<div class="row">
        <?php
            $ret=mysqli_query($con,"select * from new");
            $cnt=1;
            $row=mysqli_num_rows($ret);
            if($row>0){
            while ($row=mysqli_fetch_array($ret)) {

            ?>

<div class="col-lg-4 col-md-4 single-blog">
				<img class="img-fluid" src="profilepics/<?php  echo $row['ProfilePic'];?>" alt="">
				<ul class="post-tags">
					<li><?php  echo $row['price'];?></li>
					
				</ul>
				<h4 class="headline"><?php  echo $row['name'];?></h4>
				<p>
					<table>
						
						<tr>
							<td class="topic">Engine : </td>
							<td class="descrip"><?php  echo $row['engine'];?></td>
						</tr>

						<tr>
							<td class="topic">Engine Capacity : </td>
							<td class="descrip"><?php  echo $row['enginecapacity'];?></td>
						</tr>

						
						<tr>
							<td class="topic">Transmission :  </td>
							<td class="descrip"><?php  echo $row['transmission'];?></td>
						</tr>
						<tr>
							<td class="topic">Fuel Tank Capacity :  </td>
							<td class="descrip"><?php  echo $row['ftank'];?></td>
						</tr>
						<tr>
							<td class="topic">Top Speed :  </td>
							<td class="descrip"><?php  echo $row['tspeed'];?></td>
						</tr>
						
							<td class="topic">Width :  </td>
							<td class="descrip"><?php  echo $row['width'];?></td>
						</tr>
						<tr>
							<td class="topic">Length :  </td>
							<td class="descrip"><?php  echo $row['length'];?></td>
                            </tr>

                            

                            </tr>
					</table>
				</p>
				<br><br>
			</div>

<!-- End blog Area -->
<!-- Footer -->


<?php 
$cnt=$cnt+1;
} } ?>     
</div>
    </div>
</section>
<footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">DRIVEX<span class="dot">.</span></h4>
                        <p>We provide information about all types of cars in the world to all car addictors. We provide information about classic cars, luxury cars, sports cars, electric cars and new arrivals. Also we have a range of articles about cars as well as our social media pages provide you additional insights about all types of cars.</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='fa fa-facebook-f'></i></a>
                            <a href="#"><i class='fa fa-twitter'></i></a>
                            <a href="#"><i class='fa fa-instagram'></i></a>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0"></p> Made With <i class="fa fa-heart-o" aria-hidden="true"></i> By ICONS
                
        </div>
    </footer>
	<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/about_custom.js"></script>

</body>

</html>
