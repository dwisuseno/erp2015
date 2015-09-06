<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Batching</title>
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
												<th class="center">Item</th>
												<th class="center">Wharehouse</th>
												<th class="center">Date</th>
												<th class="center">Unit Price</th>												
												<th class="center">Quantity</th>
												<th class="center">Type</th>
												<th class="center">Status</th>
												<th class="center">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">Boot Shoes</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td class="center">26 Sep 2014</td>
												<td class="hidden-xs">170000</td>
												<td class="center">3 ea</td>
												<td class="hidden-xs">PO20140922001</td>
												<td class="hidden-xs">Approve</td>
												<td class="hidden-xs" style="text-align:center;"><button type="button" class="btn btn-primary">Rack</button></td>												
											</tr>
											<tr>
												<td class="center">Semi-Boot Shoes</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td class="center">26 Sep 2014</td>
												<td class="hidden-xs">150000</td>
												<td class="center">10 ea</td>
												<td class="hidden-xs">PO20140922001</td>
												<td class="hidden-xs">Approve</td>
												<td class="hidden-xs" style="text-align:center;"><button type="button" class="btn btn-primary">Rack</button></td>												
											</tr>
											<tr>
												<td class="center">Boot Shoes</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td class="center">26 Sep 2014</td>
												<td class="hidden-xs">170000</td>
												<td class="center">0 ea</td>
												<td class="hidden-xs">PO20140922001</td>
												<td class="hidden-xs">Approve</td>
												<td class="hidden-xs" style="text-align:center;"><button type="button" class="btn btn-primary">Rack</button></td>												
											</tr>
											<tr>
												<td class="center">Semi-Boot Shoes</td>
												<td class="hidden-xs">Wharehouse 1</td>
												<td class="center">26 Sep 2014</td>
												<td class="hidden-xs">150000</td>
												<td class="center">0 ea</td>
												<td class="hidden-xs">PO20140922001</td>
												<td class="hidden-xs">Approve</td>
												<td class="hidden-xs" style="text-align:center;"><button type="button" class="btn btn-primary">Rack</button></td>												
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