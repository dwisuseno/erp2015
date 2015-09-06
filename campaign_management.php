
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>ERP - Campaign Management</title>
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
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
									Marketing
									</a>
								</li>
								<li class="active">
									Campain Marketing
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
								<h1>Marketing Campaign<small></h1>
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
									Data Table
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
										<a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
										<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
										<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12 space20">
											<a class="btn btn-orange" href="CM-create.php">
												Create New <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="sample-table-2">
											<thead>
												<tr>
													<th>Campaign ID</th>
													<th>Name</th>			
													<th>Budget</th>
													<th>Product</th>
													<th>Action</th>
													<th>Details</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>CI20140918001</td>
													<td>Raisa Ariana</td>
													<td>18 Sep 2014</td>
													<td>Rp. 5000000.00</td>
													<td><a href="#" class="edit-row"> Edit </a>|<a href="#" class="delete-row"> Delete </a></td>
													<td><a type="button" data-toggle="modal" data-target="#exampleModal">Details</a></td>
												</tr>
											</tbody>
										</table>

    <!-- start: MAIN CONTAINER -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
										        <h4 class="modal-title" id="exampleModalLabel">Details</h4>
										      </div>
										      <div class="modal-body">
										      	<table>
										      	<tr>
										      		<td> Campaign Name </td>
										      		<td> : </td>
										      		<td> Coba </td>
										      	</tr>
										      	<tr>
										      		<td> Date Started </td>
										      		<td> : </td>
										      		<td> 4/14/2015 12:00:00 AM </td>
										      	</tr>
										      	<tr>
										      		<td> Date Ended </td>
										      		<td> : </td>
										      		<td> 4/18/2015 12:00:00 AM </td>
										      	</tr>
										      	<tr>
										      		<td> Campaign Name </td>
										      		<td> : </td>
										      		<td> Coba </td>
										      	</tr>
										      	<tr>
										      		<td> Campaign Channel </td>
										      		<td> : </td>
										      		<td> Iklan TV </td>
										      	</tr>
										      	<tr>
										      		<td> Product </td>
										      		<td> : </td>
										      		<td> Boot Shoes </td>
										      	</tr>
										      	<tr>
										      		<td> Address </td>
										      		<td> : </td>
										      		<td> Sukolilo, Surabaya, Jawa Timur, Indonesia </td>
										      	</tr>
										      	<tr>
										      		<td> Total Budget </td>
										      		<td> : </td>
										      		<td> 20000000 </td>
										      	</tr>
										      	<tr>
										      		<td> Status </td>
										      		<td> : </td>
										      		<td> WAITING APPROVAL0 </td>
										      	</tr>
										      	</table>
										        </form>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" data-dismiss="modal">Approve</button>
										        <button type="button" class="btn btn-primary">Reject</button>
										      </div>
										    </div>
										  </div>
										</div>
    
									</div>
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