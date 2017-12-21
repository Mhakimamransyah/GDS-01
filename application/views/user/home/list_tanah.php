<!-- PROMO TANAH -->
	<div class="container">
	<div class="future">
		<div class="service-top">
		<h3 >Butuh Tanah ?</h3>
		<p><a href="<?= base_url(); ?>main/tanah">Lihat Seluruh Kawasan Tanah Tersedia</a></p>
	</div>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">	
					<?php 
                        for($i=0;$i<sizeof($tanah);$i++){
					?>		
						<li><div class="project-fur">
								<a href="<?= base_url(); ?>main/tanah/<?= $tanah[$i]->id?>" ><img class="img-responsive" src="<?= base_url(); ?>resource/images/posts/<?= $tanah[$i]->banner;?>" style="width: 300px;height: 200px;" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money"></span>
		                                    <h6 class="fur-name"><a href="<?= base_url(); ?>main/tanah/<?= $tanah[$i]->id?>" ><img class="img-responsive"><?= $tanah[$i]->kawasan; ?></a></h6>
                               			</div>
			                            <div class="fur2">
			                               	<span>Palembang</span>
			                             </div>
									</div>					
							</div></li>
							<?php 
                       }
					?>
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
<!-- AKHIR PROMO TANAH -->