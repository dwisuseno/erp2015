<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Item Balance</title>
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
									<i class="active"></i>									
										Inventories									
								</li>
								<li>
									<i class="active"></i>									
										Stock Controlling									
								</li>
								<li>
									<i class="active"></i>
										Batching																			
								</li>
							</ol>
							<div class="page-header">
								<h1>Index of Receiving Batch Branch Surabaya</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					
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
												<th class="center">ID</th>
												<th class="center">Wharehouse</th>
												<th class="center">Item</th>
												<th class="center">Type Transsaction</th>												
												<th class="center">Date</th>
												<th class="center">In</th>
												<th class="center">Out</th>
												<th class="center">Plan In</th>
												<th class="center">Plan Out</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">B20140926001</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Purchase Order</td>
												<td class="hidden-xs">9/26/2014 3:27:36 PM</td>
												<td class="center">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">3</td>
												<td class="hidden-xs">0</td>
											</tr>
											<tr>
												<td class="center">B20140926002</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Semi-Boot Shoes</td>
												<td class="hidden-xs">Purchase Order</td>
												<td class="hidden-xs">9/26/2014 3:27:36 PM</td>
												<td class="center">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">10</td>
												<td class="hidden-xs">0</td>
											</tr>											
											<tr>
												<td class="center">B20140928001</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Sales</td>
												<td class="hidden-xs">9/28/2014 12:00:00 AM</td>
												<td class="center">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">2</td>
											</tr>											
											<tr>
												<td class="center">B20140928002</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Semi-Boot Shoes</td>
												<td class="hidden-xs">Sales</td>
												<td class="hidden-xs">9/28/2014 12:00:00 AM</td>
												<td class="center">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">4</td>
											</tr>											
											<tr>
												<td class="center">B20140926005</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Batching Product</td>
												<td class="hidden-xs">9/26/2014 12:00:00 AM</td>
												<td class="center">3</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
											</tr>											
											<tr>
												<td class="center">B20140926006</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Batching Product</td>
												<td class="hidden-xs">9/26/2014 12:00:00 AM</td>
												<td class="center">10</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
											</tr>											
											<tr>
												<td class="center">B20140928003</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Sales</td>
												<td class="hidden-xs">9/28/2014 12:00:00 AM</td>
												<td class="center">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">1</td>
											</tr>											
											<tr>
												<td class="center">B20140930001</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td>Boot Shoes</td>
												<td class="hidden-xs">Sales</td>
												<td class="hidden-xs">9/30/2014 12:00:00 AM</td>
												<td class="center">0</td>
												<td class="hidden-xs">1</td>
												<td class="hidden-xs">0</td>
												<td class="hidden-xs">0</td>
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
		<!-- start: FOOTER -->
		<?php
			include('footer.php');
			include('script.php');
		?>
	</body>
	<!-- end: BODY -->
</html>