<?php 
  
  $data = json_decode($this->session->userdata('perumahan_sess')); 
  $arr = [];

  for($i=0;$i<sizeof($data);$i++){
  	if($data[$i]->id != $perumahan->id){
       array_push($arr,$i);
  	}
  }
?>
<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	
		     	<h4>Perumahan</h4>
				<?php 

				$size = 0;
				if(sizeof($data)/2 > 8){
                   $size = 8;
				}
				else{$size = sizeof($data)/2 ;}
                
				for($j=0;$j<$size;$j++){
                      shuffle($arr);
                      $index = array_shift($arr);
					?>
				<div class="single-box-img ">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="<?= base_url($res); ?>images/sl.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="<?= base_url(); ?>MainController/lihatPerumahan/<?= $data[$index]->id ?>"><?= $data[$index]->nama;  ?></a></p>
						<a href="<?= base_url(); ?>MainController/lihatPerumahan/<?= $data[$index]->id ?>" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
                <?php 
                
            }?>
		 </div>
			
	  </div>
		</div>

		</div>
	</div>
	<br>