<div class="dealers">
<div class="container">
	<h3>Seluruh Kawasan Tanah</h3>
	<div class="dealer-top">
        <?php 
             $j = 0;
             $i = 1;
             while($i<=ceil(sizeof($tanah)/4)){
             	echo '<div class="deal-top-top">';
             	 do{
             	 	if($j != sizeof($tanah)){
        ?>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="<?= base_url()?>main/tanah/<?=$tanah[$j]->id?>" class="mask"><img src="<?= base_url(); ?>resource/images/posts/<?= $tanah[$j]->banner; ?>" class="img-responsive zoom-img"  style="width: 300px;height: 200px;" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="<?= base_url()?>main/tanah/<?=$tanah[$j]->id?>"><?= $tanah[$j]->kawasan; ?></a></h5>
								<p>Palembang</p>
							</div>
							<div class="top-deal2">
								<a href="<?= base_url()?>main/tanah/<?=$tanah[$j]->id?>" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>

		<?php     }else{ break; }
		            $j++;
		       }while($j%4!=0);
               $i++;
               echo '<div class="clearfix"> </div>';
               echo '</div>';
             }
		?>	


	</div>
</div>
</div>