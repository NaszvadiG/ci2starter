<h3 class="page-title">View Department</h3>
<div class="row">
	<div class="col-md-12">
		<!-- INPUTS -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">View Department</h3>
			</div>
			
			<div class="panel-body">


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

				  
				  <a class="btn btn-warning" href="<?php echo site_url("departments/pdf/$records->department_id"); ?>" role="button">Download PDF</a>
				  <a class="btn btn-default" href="<?php echo site_url("departments/index"); ?>" role="button">Cancel</a>

				
				
			</div>
		</div>
		<!-- END INPUTS -->
		
	</div>
	
</div>