<!-- LIST PERUMAHAN -->
<!-- <?php var_dump($perumahan[0]); ?> -->
<div class="content">
	
	<!-- PERUMAHAN CONTAINER -->
	<div class="content-grid">
		<h3>Perumahan</h3>
			<?php 
			    $iter = 0;
                while($iter<sizeof($perumahan)){
                   
                   if($iter%3==0){ ?>
                      <div class="container">
	                      	<div class="col-md-4 box_2">
				     	       <a  id="<?= $iter; ?>" value="<?php $data; ?>" href="<?= base_url();?>MainController/lihatPerumahan/<?= $perumahan[$iter]->id; ?>" class="mask">
				     	   	   <img style="width: 350px; height: 237px;" class="img-responsive zoom-img" src="<?= base_url();?>resource/images/posts/<?= $perumahan[$iter]->banner?>" alt="">
				     	   	   <span class="four">Lihat <?= $perumahan[$iter]->nama; ?></span>
				     	       </a>
				     	       <div class="most-1">
				     	   	      <h5><a href="single.html"><?= $perumahan[$iter]->nama; ?></a></h5>
				     	    	      <p></p>
				     	       </div>
				           </div>
                   <?php
                   }
                   else if(($iter+1)%3==0){ ?> 
                           <div class="col-md-4 box_2">
				     	       <a  id="<?= $iter; ?>" value="<?php $data; ?>" href="<?= base_url();?>MainController/lihatPerumahan/<?= $perumahan[$iter]->id; ?>" class="mask">
				     	   	   <img style="width: 350px; height: 237px;" class="img-responsive zoom-img" src="<?= base_url();?>resource/images/posts/<?= $perumahan[$iter]->banner?>" alt="">
				     	   	   <span class="four">Lihat <?= $perumahan[$iter]->nama; ?></span>
				     	       </a>
				     	       <div class="most-1">
				     	   	      <h5><a href="single.html"><?= $perumahan[$iter]->nama; ?></a></h5>
				     	    	      <p></p>
				     	       </div>
				           </div>
				       </div>
				       <div class="clearfix"> </div>
				       <br>

                   <?php
                   }
                   else{?> 
                          	<div class="col-md-4 box_2">
				     	       <a  id="<?= $iter; ?>" value="<?php $data; ?>" href="<?= base_url();?>MainController/lihatPerumahan/<?= $perumahan[$iter]->id; ?>" class="mask">
				     	   	   <img style="width: 350px; height: 237px;" class="img-responsive zoom-img" src="<?= base_url();?>resource/images/posts/<?= $perumahan[$iter]->banner?>" alt="">
				     	   	   <span class="four">Lihat <?= $perumahan[$iter]->nama; ?></span>
				     	       </a>
				     	       <div class="most-1">
				     	   	      <h5><a href="single.html"><?= $perumahan[$iter]->nama; ?></a></h5>
				     	    	      <p> </p>
				     	       </div>
				           </div>

                   <?php
                   }
                   $iter++;
			} ?>
		</div>	
		<br>	
	</div>

<!-- LIST PERUMAHAN -->