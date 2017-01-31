<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<div class="page-logo">
				<img width="80%" height="50%" src="<?php echo $baseurl ?>/_images/cli.png" alt="logo" class="logo-default" onclick="window.location ='<?php echo $baseurl."/utama.php" ?>';" style="cursor:pointer" title="Goto Main Menu">
				<div class="menu-toggler sidebar-toggler">
				</div>
			</div>
		</div>
		<!-- END LOGO -->
		<div class="page-actions center">
			<img width="75%" height="65%" src="<?php echo $baseurl ?>/_images/judul.png" alt="logo" class="logo-default" onclick="window.location ='<?php echo $baseurl."/utama.php" ?>';" style="cursor:pointer" title="Goto Main Menu">
		</div>
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						<?php if($_SESSION['priv'] == 'admin'){echo "Admin ".$_SESSION['nama'];}else{echo "User ".$_SESSION['nama'];} ?> </span>
						</a>
					</li> -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				</div>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>