
<!DOCTYPE html>
<html>
<head>
<title>Ragil Market</title>
<link href="<?= base_url($res); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url($res); ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="<?= base_url($res); ?>js/scripts.js"></script>
<link href="<?= base_url($res); ?>css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="<?= base_url($res); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="<?= base_url($res); ?>js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.html">Contact Ragil</a></li>
						<li><a  href="blog.html">Facebook</a></li>
						<li><a  href="terms.html">Instagram</a></li>
						<li><a  href="about.html">GDS</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<!-- // HEADER TEMPLATE -->
<div class="header">

	<!-- //BAGIAN JUDUL TEMPLATE -->
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">RAGIL</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>081271286874</span></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="<?= base_url($res); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="<?= base_url($res); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="<?= base_url($res); ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!-- //AKHIR BAGIAN JUDUL TEMPLATE -->





<!-- BAGIAN BANNER -->	
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
                   <style type="text/css">
			      	.poster{
							min-height: 550px;
							background-size: cover;
					}

					.promowebsite{
						 background: url('<?= base_url()?>/resource/images/posts/web.jpg') no-repeat;
						background-size: cover;
						-webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
					}

					.promorrumah{
                       background: url('<?= base_url()?>/resource/images/posts/main_banner.jpg') no-repeat;
						background-size: cover;
						-webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
					}

					.promotanah{
                       background: url('<?= base_url()?>/resource/images/posts/tanah.jpg') no-repeat;
						background-size: cover;
						-webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
					}

					.banner{
						background: url('<?= base_url()?>/resource/images/posts/de3.jpg') no-repeat;
						background-size: cover;
						-webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
					}

			      </style>	       
			      <ul class="rslides" id="slider">	
					 <li>
			          	 <div  class="poster promorrumah">
			           		<div  class="caption">
					          	<h3>Hunian <span>Nyaman</span> dan <span>Menyenangkan</span></h3>
					          	<p>Dapatkan kenyamanan anda bersama kami</p>
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="poster promowebsite">
			           		<div class="caption">
					          	<h3>Bergabung Bersama <span style="color: green">Kami</span></h3>
					          	<p>Dapatkan informasi bidang properti</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="poster promotanah">
			           		<div class="caption">
					          	<h3><span>Tanah</span></h3>
					          	<p>Informasi mengenai jual beli tanah di Palembang</p>
			          		</div>
			          	</div>
			         </li>
                     
                     <!-- Do random banner -->
			         <!--   <li>
			          	 <div class="poster">
			           		<div class="caption">
					          	<h3><span>Tanah</span> </h3>
					          	<p>Luas dan Subur</p>
			          		</div>
			          	</div>
			         </li> -->

			      </ul>

			  </div>
			</div>
		</div>
	</div>
<!-- AKHIR BAGIAN BANNER -->


<!-- BAGIAN MENU ATAS -->

	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					<div class=" bottom-head">
						<a href="index.html">
							<div class="buy-media">
								<i class="buy"> </i>
								<h6>Home</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="buy.html">
							<div class="buy-media">
							<i class="rent"> </i>
							<h6>Perumahan</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="seluruh_tanah.html">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>Tanah</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="faqs.html">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6>FAQ</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="contact.html">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>Hubungi</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="buy.html">
							<div class="buy-media">
							<i class="apart"> </i>
							<h6>Profile</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="dealers.html">
							<div class="buy-media">
							<i class="deal"> </i>
							<h6>Dealers</h6>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
