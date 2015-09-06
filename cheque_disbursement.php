
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Cheque Disbursement</title>
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
										Finance
									</a>
								</li>
								<li>
									<i class="clip-pencil"></i>
									<a href="cash_bank_management.php">
										Cash and Bank Management
									</a>
								</li>
								<li>
									<i class="clip-pencil"></i>
									<a href="cheque_management.php">
										Cheque Management
									</a>
								</li>
								<li class="active">
									Cheque Issued Management
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
								<h1>Cheque Issued Management</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Cheque Issued Management
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
									<div class="row">
										<div class="col-md-12 space20">
											<!--<button class="btn btn-green add-row">
												Create New <i class="fa fa-plus"></i>
											</button>-->
											<a href="#responsive" data-toggle="modal" class="demo btn btn-green">
												Create New Cheque for Invoice
											</a>
											<a href="#responsive2" data-toggle="modal" class="demo btn btn-green">
												Create New Order Cheque
											</a>
											<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title">Create New Cheque Issued</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<label for="form-field-select-4">
																Invoice Number
															</label>
															<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
															</select>
														</div>
														<div class="col-md-6">
															<label for="form-field-select-4">
																Transaction Code
															</label>
															<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
																<option value="AL">AP</option>
																<option value="AK">AR</option>
																<option value="CRM">CRM</option>
																<option value="FA">FA</option>
																<option value="FIN">FIN</option>
																<option value="IV">IV</option>
																<option value="MF">MF</option>
																<option value="SRM">SRM</option>
															</select>
														</div>
														<div class="col-md-6">
															<h4>Amount</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date Effective</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date Cleared</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Cheque Number</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<label for="form-field-select-4">
																Cheque Status
															</label>
															<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
																<option value="AL">Available</option>
																<option value="AK">Received</option>
															</select>
														</div>
														<div class="col-md-6">
															<h4>Notes</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-light-grey">
														Close
													</button>
													<button type="button" class="btn btn-blue">
														Create
													</button>
												</div>
											</div>
											<div id="responsive2" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title">Create New Order Cheque</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<label for="form-field-select-4">
																Transaction Code
															</label>
															<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
																<option value="AL">AP</option>
																<option value="AK">AR</option>
																<option value="CRM">CRM</option>
																<option value="FA">FA</option>
																<option value="FIN">FIN</option>
																<option value="IV">IV</option>
																<option value="MF">MF</option>
																<option value="SRM">SRM</option>
															</select>
														</div>
														<div class="col-md-6">
															<h4>Payee</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Amount</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date Effective</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date Cleared</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Cheque Number</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Reference No.</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<h4>Date</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
														<div class="col-md-6">
															<label for="form-field-select-4">
																Cheque Status
															</label>
															<select multiple="multiple" id="form-field-select-4" class="form-control search-select">
																<option value="AL">Available</option>
																<option value="AK">Received</option>
															</select>
														</div>
														<div class="col-md-6">
															<h4>Notes</h4>
															<p>
																<input class="form-control" type="text">
															</p>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-light-grey">
														Close
													</button>
													<button type="button" class="btn btn-blue">
														Create
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="sample_2">
											<thead>
												<tr>
													<th>Cheque No.</th>
													<th>Reference No.</th>
													<th>Amount</th>
													<th>Status</th>
													<th>Transaction Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>PO20140922001</td>
													<td>APPI20140928001</td>
													<td>2,211,000</td>
													<td>Available</td>
													<td>26 Sep 2014</td>
													<td>
														<a href="#" class="edit-row"> Edit </a>
														<a href="#" class="delete-row"> Delete </a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- end: FORM WIZARD PANEL -->
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