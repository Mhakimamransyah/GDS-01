<div class="blog">
<div class="container">
   <div class="col-md-9 blog-head">
	     <div class="blog-top">
	        <img style=" width: 875px;height:400px"src="<?= base_url()?>resource/images/posts/<?= $rumah->banner; ?>" class="img-responsive" alt=""/>
	          <h4>Introduce</h4>
	         <h5>Tittle :  <?= $rumah->nama; ?></h5>
	        <p><?= $rumah->body;?></p>
	           <div class="links">
		  	   </div>
		 </div> 		
	</div>
	<?php 
       $size = sizeof($perumahan->data_rumah);
       $drumah = $perumahan->data_rumah;
       $arr = [];
       for($i=0;$i<$size;$i++){
          if($rumah->id != $drumah[$i]->id){
              array_push($arr,$i);
          }
       	}
    
       $length;
       if($size/2 > 8){
           $length = 8;
       }
       else{
       	$length = $size/2;
       }
	?>
	<div class="col-md-3 blog-sidebar">
		 <div class="blog-list1">
	     	<?php 
                if($length > 1){
                	echo "<h4>Rumah</h4>";
		     	    for($i=0;$i<$length;$i++){
	                       shuffle($arr);
	                       $index = array_shift($arr);
	     		?>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="blog_single.html"><img class="img-responsive" src="<?= base_url()?>resource/images/posts/<?= $drumah[$index]->banner;  ?>" style="width: 100px;
    height: 100px;" alt="">
				</div>
				<div class="blog-text">
					<p ><a href="<?= base_url()?>MainController/lihatPerumahan/<?= $perumahan->id; ?>/<?= $drumah[$index]->id; ?>"><?= $drumah[$index]->nama?></a></p>
					<span class="link">
						<?= $perumahan->nama; ?>
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php }} ?>
		 </div>
	 </div>
	 <div class="clearfix"> </div>
	 
</div>
</div>