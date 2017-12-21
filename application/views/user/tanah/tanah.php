<div class="container">
	<div class="buy-single">
		<h3><?= $tanah->kawasan; ?></h3>

		<?php 
              $i=1;
              $size = sizeof($tanah->data_tanah);
              $loop = $size;
              $index = 0;
              
              while($i<=ceil($size/5)){   
                 echo ' <div id="kavling'.$i.'">';
                 $j = 0;
                 while($j<$loop){
                 	if( $j==0 || $j%5!=0){
		?>
					<div class="box-sin">
						<div class="col-md-9 single-box">
							<div class="box-col">
							     <div class=" col-sm-7 left-side ">
									<a href="<?= base_url()?>main/tanah/<?=$tanah->id?>/<?= $tanah->data_tanah[$index]->id?>"> <img class="img-responsive" style="width: 495px;height: 313px;" src="<?= base_url()?>resource/images/posts/<?= $tanah->data_tanah[$index]->banner?>" alt=""></a>
								</div>				
								<div class="  col-sm-5 middle-side">
									<div id="descripsi_body">
								     <h4><?= $tanah->data_tanah[$index]->nama; ?></h4>
								     <p>PALEMBANG</p>	 
									</div>
									<div class="   right-side">
										 <a href="<?= base_url()?>main/tanah/<?=$tanah->id?>/<?= $tanah->data_tanah[$index]->id?>" class="hvr-sweep-to-right more" >Lihat Selengkapnya</a>     
									 </div>
								 </div>
							 <div class="clearfix"> </div>
							</div>
						</div>
					</div>	
		<?php 
			         $j++;
			         $index++;
			      }else if($j%5==0 || $index == $size){break;}
		        }
		        $loop = $loop - 5;
		      echo '</div>';
		      $i++;
           }


		?>




	<!-- 	<div class="col-md-3 map-single-bottom">
			<div class="single-box-right">
		     	<h4>Featured Communities</h4>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl1.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl2.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl3.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl4.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
		 </div>
	  </div> -->
		<div class="clearfix"> </div>
		  <button id="next" class="btn btn-lg btn-success">Lihat Selanjutnya..</button>
		  <button id="prev" class="btn btn-lg btn-danger" hidden>Lebih Sedikit..</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
        
        first = 1;
        on = first
        last = <?= ceil($size/5);?>;
        checkLast();
        
        for(i=first+1;i<=last;i++){
           $("#kavling"+i).hide(); 
        }

        $("#next").click(function(){
        	on++;
        	$("#kavling"+on).show();
        	buttonValidation();
        })

        $("#prev").click(function(){
        	$("#kavling"+on).hide();
        	on--;
        	buttonValidation();
        })

        function buttonValidation(){
        	if(on == last){
                $("#next").hide();
                $("#prev").show();
        	}
        	else if(on == 1){
               $("#next").show();
               $("#prev").hide();
        	}
        	else{
        		 $("#next").show();
                 $("#prev").show();
        	}
        }

        function checkLast(){
        	if(last == 1 || last == 0){
                 $("#next").hide();
                 $("#prev").hide();
        	}
        }

	})
</script>