<h2><?=$title ?></h2>
<br>
<ul class="list-group">
<?php foreach($categories as $category) : ?>

	<br>
	<div class="row">
		<hr><h3><?php echo $category['name'];?></a></h3><br>
		<div class="col-md-4">
			<div class="thumbnail">
				<img class="post-thumb" src="<?php echo site_url(); ?>resource/images/categories/<?php echo $category['image'];?>">
			</div>
		</div>
		<div class="col-sm-8">
			<small>General description of category <strong><?php echo $category['name'];?></strong></small>
			<br>
			<?php echo word_limiter($category['umum'],250);?>
			<br>
			
			<a class="btn btn-default pull-left" href="<?php echo base_url();?>categories/edit/<?php echo $category['id'];?>">Edit</a>
			<?php echo form_open('/categories/delete/'.$category['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		</div>
	</div>

<?php endforeach; ?>
</ul>