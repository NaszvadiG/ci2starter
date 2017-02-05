				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url(); ?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo site_url('layouts/elements'); ?>" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
						<li><a href="<?php echo site_url('layouts/charts'); ?>" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="<?php echo site_url('layouts/panels'); ?>" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="<?php echo site_url('layouts/notifications'); ?>" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('layouts/profile'); ?>" class="">Profile</a></li>
									<li><a href="<?php echo site_url('layouts/login'); ?>" class="">Login</a></li>
									<li><a href="<?php echo site_url('layouts/lockscreen'); ?>" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo site_url('layouts/tables'); ?>" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="<?php echo site_url('layouts/typography'); ?>" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="<?php echo site_url('layouts/icons'); ?>" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>