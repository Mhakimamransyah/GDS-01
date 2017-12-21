<div class="container">
	<div class="future">
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">	
					  <?php 
                             for($i=0;$i<sizeof($perumahan->data_rumah);$i++){
					  ?>		
						<li><div class="project-fur">
								<a href="<?= base_url();?>main/perumahan/<?= $perumahan->id; ?>/<?= $perumahan->data_rumah[$i]->id;?>" ><img class="img-responsive" src="<?= base_url(); ?>resource/images/posts/<?= $perumahan->data_rumah[$i]->banner?>"  style="height:200px;width: 1000px" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                     <span class="fur-money">Harga</span>
		                                    <h6 class="fur-name"><a href="<?= base_url();?>main/perumahan/<?= $perumahan->id; ?>/<?= $perumahan->data_rumah[$i]->id;?>"><?= $perumahan->data_rumah[$i]->nama?></a></h6>
		                                   	<!-- <span>Paris</span> POSISI-->
                               			</div>
			                            <div class="fur2">
			                               	<span>Status(SOLD or NO)</span>
			                             </div>
									</div>					
							</div></li>
							<?php } ?>
							
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

		<!-- END OWNER PROMOTION -->
<!-- AKHIR PENCARIAN -->

