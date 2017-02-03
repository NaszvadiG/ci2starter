<h3 class="page-title">Edit Department</h3>
<div class="row">
	<div class="col-md-12">
		<!-- INPUTS -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Update Existing Department</h3>
			</div>

			<!-- success alert and validation error alert -->

			<?php if ($this->session->flashdata('success')): ?>

			  <div class="alert alert-success" role="alert">
			  <?php echo $this->session->flashdata('success'); ?>
			  </div>
			  
			<?php endif ?>

			<?php if(validation_errors() != false):  ?>

			  <div class="alert alert-error" role="alert">
			  Validation Error
			  </div>

			<?php endif ?>
			
			<div class="panel-body">

				<?php echo form_open('departments/edit', 'class="" id="myform"'); ?>

				  <div class="form-group">
				    
				    <?php
					    echo form_label('Department Name','department_name');
					    echo form_error('department_name');
					    echo form_input('department_name',set_value('department_name',$records->department_name),'class="form-control"');
				    ?>

				  </div>
				  
				  <div class="form-group">

				  	<?php
					    echo form_label('Department Description','department_description');
					    echo form_error('department_description');
					    echo form_textarea('department_description',set_value('department_description',$records->department_description),'class="form-control"');
				    ?>

				  </div>

				  <?php echo form_hidden('department_id',set_value('department_id',$records->department_id));?>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				  <a class="btn btn-default" href="<?php echo site_url("departments/index"); ?>" role="button">Cancel</a>

				<?php echo form_close(); ?>
				
			</div>
		</div>
		<!-- END INPUTS -->
		
	</div>
	
</div>