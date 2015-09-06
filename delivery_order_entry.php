<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Delivery Order Entry</title>
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
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-pencil"></i>
									<a href="#">
										Sales
									</a>
								</li>
								<li class="active">
									Delivery Order Entry
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Delivery Order</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel-body">
								<form role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="form-field-2">
											Sales Order Number
										</label>
										<div class="col-sm-9">
											<select id="form-field-select-1" class="form-control">
												<option value="">&nbsp;</option>
												<option value="SO20140928002001">SO20140928002001</option>
											</select>
										</div>
									</div>
									<!-- start: TEXT FIELDS PANEL -->
									<div class="panel panel-default">
										<div class="panel-heading">
											Sales Order Details
										</div>
										<div class="form-group">
											<div class="panel-body">
												<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
													<thead>
														<tr>
															<th>Details ID</th>
															<th>Product</th>
															<th>Product Quantity</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>SO20140928002001</td>
															<td>Boot Shoes</td>
															<td>Amaya</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="form-field-2">
											Delivery Date : 
										</label>
										<div class="col-sm-9">
											<input type="text" placeholder="09/30/2014" id="form-field-1" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="form-field-1">
											Customer Name : 
										</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Raisa Ariana" id="form-field-1" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="form-field-1">
											Customer Address : 
										</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Manukan Kulon, Surabaya, Jawa Timur, Indonesia" id="form-field-1" class="form-control">
										</div>
									</div>
									<span class="input-group-btn">
										<button type="button" class="btn btn-primary">
											Create
										</button> 
									</span>
								</form>
							</div>
							<!-- end: TEXT FIELDS PANEL -->
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