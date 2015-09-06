<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Dashboard</title>
		<?php
			include('head.php'); 
		?>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<?php
			include('header.php');
		?>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<?php
					include('menubar_kiri.php');
				?>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<div class="horizontal-menu navbar-collapse collapse">
					<div class="horizontal-menu navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="index_pp.php">
								Dashboard
							</a>
						</li>

						<li>
							<a href="" class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown">
								Master Data <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="bill_of_material.php">
										<span class="title">Bill of Material</span>
									</a>
								</li>
								<li>
									<a href="master_operation.html">
										<span class="title">Master Operation</span>
									</a>
								</li>								
								<li>
									<a href="master_routing.php">
										Master Routing
									</a>
								</li>
								<li>
									<a href="machine_setting.php">
										Machine Setting
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="" class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown">
								Production Order <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="resource_alocation.php">
										<span class="title">Resource Alocation</span>
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="" class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown">
								Scheduling <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="resource_alocation.php">
										<span class="title">View Scheduling</span>
										<span class="title">View Scheduling Pool</span>
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="close_production.php">
								Close Production
							</a>
						</li>
					</div>
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: STYLE SELECTOR BOX -->
							
							<!-- end: STYLE SELECTOR BOX -->
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-bars"></i>
									<a href="#">
										Production Pre-Execution
									</a>
								</li>
							</ol>
							<div class="page-header">
								<h1>Production Pre-Execution</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-6">
							<!-- start: BASIC CHART PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Basic Chart
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="flot-container">
										<div id="placeholder" class="flot-placeholder"></div>
									</div>
								</div>
							</div>
							<!-- end: BASIC CHART PANEL -->
						</div>
						<div class="col-md-6">
							<div class="core-box">
								<div class="heading">
									<i class="clip-database circle-icon circle-bricky"></i>
									<h2>Overview</h2>
								</div>
								<div class="content">
									Total Production Order				:	3<br/>
									Completed Production Order			:	0<br/>
									Production Order Pending			:	0<br/>
									Production Order in Scheduling Pool :	0<br/>
									Production Order Created			:	3<br/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Basic table
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">No</th>
												<th>PO ID</th>
												<th class="hidden-xs">Entry Date</th>
												<th>Item</th>
												<th class="hidden-xs">Request Qty</th>
												<th class="hidden-xs">Production Qty</th>
												<th class="hidden-xs">Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">1</td>
												<td class="hidden-xs">PO.28-09-2014.1001</td>
												<td>28/09/2014</td>
												<td class="hidden-xs">Boot Shoes</td>
												<td class="hidden-xs">12</td>
												<td class="hidden-xs">12</td>
												<td class="hidden-xs">Created</td>
												<td class="center"></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td class="hidden-xs">PO.28-09-2014.1001</td>
												<td>02/12/2014</td>
												<td class="hidden-xs">Boot Shoes</td>
												<td class="hidden-xs">30</td>
												<td class="hidden-xs">30</td>
												<td class="hidden-xs">Created</td>
												<td class="center"></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td class="hidden-xs">PO.28-09-2014.1002</td>
												<td>02/12/2014</td>
												<td class="hidden-xs">Semi-Boot Shoes</td>
												<td class="hidden-xs">10</td>
												<td class="hidden-xs">10</td>
												<td class="hidden-xs">Created</td>
												<td class="center"></td>
											</tr>
										</tbody>


									</table>
								</div>


							</div>
						</div>
					</div>
					
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
	<?php
		include('footer.php');
		include('script.php');
	?>
	</body>
	<!-- end: BODY -->
</html>