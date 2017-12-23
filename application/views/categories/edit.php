<h2><?= $title; ?></h2>
<br>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/update/'.$category['id']); ?>
<input type="hidden" name="id" value="<?php echo $category['id'];?>">
  	<div class="form-group">
  		<label>Name</label>
  		<input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $category['name'];?>">
  	</div>

  	<div class="form-group">
  		<label>General Description</label>
  		<input type="text" class="form-control" name="desc" placeholder="Category Description" value="<?php echo $category['umum'];?>">
  	</div>

  	<div class="form-group">
  		<label>Jenis</label>
		<select name="jenis" class="form-control">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>  		
  	</div>

  	<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="userfile" size="20"></input>
	</div>

  	<button type="submit" class="btn btn-default">Submit</button>

</form>