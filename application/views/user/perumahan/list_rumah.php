<div class="container">
	<div class="future">
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="<?= base_url();?>MainController/lihatRumah/1" ><img class="img-responsive" src="<?= base_url($res); ?>images/pi.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="rumah.html">Contrary to populare</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
									<a href="<?= base_url();?>MainController/lihatRumah/2" ><img class="img-responsive" src="<?= base_url($res); ?>images/pi1.jpg" alt="" />	</a>
										<div class="fur">
											<div class="fur1">
			                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
			                                   <h6 class="fur-name"><a href="rumah.html">Contrary to popular</a></h6>
			                                   	<span>Paris</span>
	                               			</div>
				                            <div class="fur2">
				                               	<span>2 BHK</span>
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
								<a href="<?= base_url();?>MainController/lihatRumah/3" ><img class="img-responsive" src="<?= base_url($res); ?>images/pi2.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                   <h6 class="fur-name"><a href="rumah.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
								<a href="<?= base_url();?>MainController/lihatRumah/4" ><img class="img-responsive" src="<?= base_url($res); ?>images/pi3.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="rumah.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="<?= base_url($res); ?>js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>

<!-- PENCARIAN -->
<!-- OWNER PROMOTION -->
		<div class="content-middle">
			<div class="container">
				<div class="mid-content">
					<h3>&nbsp;cari ?</h3>
					<form class="form-group" action="/action_page.php">
               <div class="form-group">
                    <div class="col-sm-6">
                     <input class="form-control" id="disabledInput" placeholder="Harga Mulai Dari" type="number">
                   </div>
               </div>
               <div class="form-group">
                
                    <div class="col-sm-6">
                     <input class="form-control" id="disabledInput" placeholder="Hargar Sampai" type="number">
                   </div>
                   <br><br>
               </div>
               <div class="form-group">
                 <label for="disabledInput" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                     <input class="form-control" id="disabledInput" placeholder="Tipe" type="number">
                   </div>
                   <br><br>
               </div>
               <div class="form-group">
                 <label for="disabledInput" class="col-sm-1 control-label"></label>
                    <div class="col-sm-12">
                     <input class="form-control" id="disabledInput" placeholder="Luas" type="number">
                   </div>
                    <br><br>
               </div>
               <div class="form-group">
               	<div class="col-sm-12 control-label">
               	 <input type="submit" class="btn btn-sm btn-warning" name="cari">
               	</div>
               </div>

           </form>
					
				</div>
			</div>
		</div>
		<!-- END OWNER PROMOTION -->
<!-- AKHIR PENCARIAN -->

<!-- spesifikasi -->
<div class="dealers">
<div class="container">
	<h3>Spesifikasi</h3>
	<div class="dealer">
		<div class="dealer-grid">
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>1</span>
					<h6>Alamat</h6>
					<div class="clearfix"> </div>
				</div>
				<p>kalimat pertama adalah
				kalimat kedua adalah 
			kalimat ketiga adalaj</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>2</span>
					<h6>PAM</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>3</span>
					<h6>Jalan</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!-- spesifikasi -->


<!-- fasilitas -->
<div class="dealers">
<div class="container">
	<h3>Fasilitas</h3>
	<div class="dealer">
		<div class="dealer-grid">
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>1</span>
					<h6>Jogging Track</h6>
					<div class="clearfix"> </div>
				</div>
				<p>kalimat pertama adalah
				kalimat kedua adalah 
			    kalimat ketiga adalaj</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>2</span>
					<h6>Pos Satpam</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>3</span>
					<h6>Taman Hiburan</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!-- fasilitas -->


<!-- harga -->
<div class="dealers">
<div class="container">
	<h3>Harga</h3>
	<div class="dealer">
		<div class="dealer-grid">
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>1</span>
					<h6>DP</h6>
					<div class="clearfix"> </div>
				</div>
				<p>kalimat pertama adalah
				kalimat kedua adalah 
			kalimat ketiga adalaj</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>2</span>
					<h6>KPR</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>3</span>
					<h6>Cicilan</h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!-- harga -->
