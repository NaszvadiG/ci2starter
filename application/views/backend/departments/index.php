<h3 class="page-title">Department Lists</h3>
					
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">List of Departments</h3>
								</div>
								<div class="panel-body">

									<?php if ($this->session->flashdata('success')): ?>

									  <div class="alert alert-success" role="alert">
									  <?php echo $this->session->flashdata('success'); ?>
									  </div>
									  
									<?php endif ?>
									
									<a style="margin-bottom:20px;" class="btn btn-warning btn-lg" href="<?php echo site_url("departments/create"); ?>" role="button">New Department</a>
									

									<table class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Department Name</th>
												<th>Department Desc</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php if(isset($records)){ foreach ($records as $key => $row) { ?>

											<tr>
												<td></td>
												<td><?php echo $row->department_name; ?></td>
												<td><?php echo $row->department_description; ?></td>
												<td>
													<?php echo form_open('departments/delete'); ?>

													<?php echo form_hidden('department_id', $row->department_id); ?>
													  
													<a class="btn btn-default" href="<?php echo site_url("departments/show/$row->department_id"); ?>" role="button">Show</a>
													<a class="btn btn-primary" href="<?php echo site_url("departments/edit/$row->department_id"); ?>" role="button">Edit</a>

													<button type="submit" class="btn btn-danger delete">Delete</button>

													<?php echo form_close(); ?>

												</td>
											</tr>

											<?php } } ?>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
						
					</div>
					