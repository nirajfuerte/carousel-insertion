<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>LTS</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
<style>

div.polaroid {
  width: 50%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
.carousel-control-next-icon
{
  color: black;  
}
</style>
</head>

<body>
		
	<div id="page">
		
<!--	<header class="header menu_fixed">
		<div id="logo">
			<a href="index.html">
			 <img src="img/logo.png" width="140" height="75" alt="" class="logo_normal">
                    <img src="img/logo.png" width="140" height="75" alt="" class="logo_sticky">
			</a>

		-- /btn_mobile -
		<nav id="menu" class="main-menu"><br><br>
			<ul>
				<li><span><a href="">Assured</a></span>
					
				</li>
			
				
			</ul>
		</nav>
	</header>
-- /header -->
	
	<main>
	<section>
                <div class="wrapper">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <!--      <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                             <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                              <li data-target="#carouselExampleCaptions" data-slide-to="7"></li> 
                        </ol> -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/1.png" class="d-block w-100" alt="...">
                              
                                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                                    <h1 style="color:Black"></h1>

                                </div>
                            </div>
                            
					<?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM slider";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>		
                            <div class="carousel-item">
                                <img src="admin/uploads/<?php echo $row['img'];?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
<a href=""> <h1 style="color:black"></h1></a>
                                </div>
                            </div>
                           	<?php
										
									
									
									$counter--;
								
									?>
									
							<?php 
							} 
						} 
						$conn->close(); ?>
                           
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="container">


                    </div>
                </div>
            </section>
		<!-- /hero_single -->
		
	<div class="container margin_60_35">
			<div class="main_title_3">
					
			<!--		<p></p>
					<a href="all-categories.html">View all</a>-->
				</div>
			<div class="row justify-content-center">
			
					<?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM img1";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>	
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="<?php	echo"".$row['llink'].""; ?>" class="grid_item">
					
								<?php
									echo"<img src=admin/uploads/".$row['img']." width='330' height='200' alt=''> "; ?>
							<div class="info">
								
								<em><i class=""></i></em>
								<h3><?php	echo"".$row['text']." "; ?></h3>
							</div>
					
					</a>
				</div>
					<?php
					$counter--;
								
									?>
									
							<?php 
							} 
						} 
						$conn->close(); ?>
				<!-- /grid_item -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	
	
		   <div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
	
		 <?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM vid";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>
	
	
					<div class="col-lg-6">
						<a href="<?php	echo"".$row['llink']." "; ?>" class="boxed_list">
						<?php
										
									echo"<img src=admin/uploads/".$row['vid']."  alt='' width='500' height='400' class='img-fluid'> 
										
							<a href=".$row['llink']." style='margin-top:-160px;'> "; ?>
							<i class="fa fa-youtube-play" style="margin-top:-10px; font-size:48px;color:red"></i>
							<h4><?php	echo"".$row['text']." "; ?></h4>
						
						</a>
					</div>
					
								
			<?php
		$counter--;
			?>
		<?php 
		} 
		} 
	$conn->close();
	?>	
			
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
					
					
					
	
			<div class="call_section_3">
			<div class="wrapper" style=" padding: 10px 0 10px 0;
  background-color: #051d4d;
  
  height: 50%;">
				<div class="container clearfix">
					<div class="margin_60">
					    <div class="row justify-content-center">
			
					<?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM img3";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>	
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="<?php	echo"".$row['llink'].""; ?>" class="grid_item">
					
								<?php
									echo"<img src=admin/uploads/".$row['img']." width='330' height='190' alt=''> "; ?>
							<div class="info">
								
								<em><i class=""></i></em>
								<h3><?php	echo"".$row['text']." "; ?></h3>
							</div>
					
					</a>
				</div>
					<?php
										
									
									
									$counter--;
								
									?>
									
							<?php 
							} 
						} 
						$conn->close(); ?>
				<!-- /grid_item -->
				
			</div>
				
				</div>
				<!-- /container -->
			</div>
		</div>
	</div>

<div class="container margin_60_35">	<br>
                <div class="row">
				<?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM img2";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>	
								<br>
									<div class="col-lg-3 col-md-6" style="padding-left: 5px" >
									    <a href="<?php	echo"".$row['llink'].""; ?>">	
									<?php
									echo"<img src=admin/uploads/".$row['img']." width='230' height='160' alt=''> "; ?>
					
							<h6 style=" padding-top: 10px; "><?php	echo"".$row['text']." "; ?></h6>
							
									</a>	</div>
									
										<?php
										
									
									
									$counter--;
								
									?>
									
							<?php 
							} 
						} 
						$conn->close(); ?>
				
				
			</div>
		</div>
		
           <div style=" padding: 0px 0 0px 0;
  background-color: #4c4444; ">
			
		<div class="container margin_60_35" >
			<div class="main_title_2">
				
			</div>
			<div class="row justify-content-center">
			    	<?php
$conn= mysqli_connect("mysql.hostinger.in","u485468744_imf","12345678","u485468744_imf");
						$sql = "SELECT * FROM img4";
						$result = $conn->query($sql);

						if ($result->num_rows >0) 
						{
							$counter = mysqli_num_rows($result);
							while($row = $result->fetch_assoc()) 
							{
								?>	
				<div class="col-lg-3 col-6">
					<a href="<?php	echo"".$row['llink']." "; ?>" class="box_cat_home">
					    									<?php

							echo"<img src=admin/uploads/".$row['img']." width='100' height='100' alt=''> "; ?>
					<h3><?php	echo"".$row['text']." "; ?></h3>
					</a>
				</div>
					<?php
										
									
									
									$counter--;
								
									?>
									
							<?php 
							} 
						} 
						$conn->close(); ?>
			


			</div>
		</div>
		<!-- /call_section -->
</div>
	</main>
	<!-- /main -->

	
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	

	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

</body>
</html>