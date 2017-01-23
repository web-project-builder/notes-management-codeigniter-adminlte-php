<form action="<?php echo base_url()."notes/add_edit"; ?>" method="post" role="form" id="form" enctype="multipart/form-data" style="padding: 0px 30px">
 <?php if(isset($data->notes_id)){?><input type="hidden"  name="id" value="<?php echo isset($data->notes_id) ?$data->notes_id : "";?>"> <?php } ?>
 <div class="box-body"><div class="form-group">
			 		<label for="date">Date <span class="text-red">*</span></label>
<input type="date" placeholder=" Date" class="form-control" id="date" name="date" required value="<?php echo isset($data->date)?date("Y-m-d",strtotime($data->date)):date("Y-m-d",strtotime("now"));?>"  >
</div>
<div class="form-group">
			 		<label for="title">Title <span class="text-red">*</span></label>
<input type="text" placeholder=" Title" class="form-control" id="title" name="title" required value="<?php echo isset($data->title)?$data->title:"";?>"  >
</div>
<div class="form-group">
			 		<label for="description">Description </label>
<textarea class="form-control" id="description" name="description" ><?php echo isset($data->description)?$data->description:"";?></textarea>
</div>
<div class="form-group">
			 		<label for="category_name">Category Name </label>
<?php echo selectBoxDynamic("category_name","notes_category","category_name",isset($data->category_name) ?$data->category_name : "");?>
</div>
<div class="form-group">
			 		<label for="upload_file">Upload File </label>
<?php  if( isset($data->upload_file) && !empty($data->upload_file)){ $req ="";}else{$req ="";}
						if(isset($data->upload_file))
						{ 
							?>
							<input type="hidden"  name="fileOld" value="<?php echo isset($data->upload_file) ?$data->upload_file : "";?>">
							<a href="<?php echo base_url().'assets/images/'.$data->upload_file ?>" download> <?php echo $data->upload_file; ?> </a>
						<?php 
						} 
						?>
						<input type="file" placeholder=" Upload File" class="file-upload" id="upload_file" name="upload_file" <?php echo $req; ?> value="" onchange='validate_fileType(this.value,&quot;upload_file&quot;,&quot;jpg,png,jpeg,gif&quot;);'><p id="error_upload_file"></p>
</div>
</div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                  	 <input type="submit" value="Save" name="save" class="btn btn-primary btn-color">
                  </div>
               </form>