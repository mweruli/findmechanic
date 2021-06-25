@extends('layouts.backend.app')
@section('content')
	
<div class="wrapper">

  
  
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-primary b-1 rounded w-60 h-60 mx-auto">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">New Client</p>
								<h6 class="text-dark mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-warning b-1 rounded w-60 h-60 mx-auto">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Sold Cars</p>
								<h6 class="text-dark mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-info b-1 rounded w-60 h-60 mx-auto">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Sales Lost</p>
								<h6 class="text-dark mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-danger b-1 rounded w-60 h-60 mx-auto">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Inbound Call</p>
								<h6 class="text-dark mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-success b-1 rounded w-60 h-60 mx-auto">
								<i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Out Call</p>
								<h6 class="text-dark mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon border-secondary b-1 rounded w-60 h-60 mx-auto">
								<i class="text-secondary mr-0 font-size-24 mdi mdi-chart-line"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Total Revune</p>
								<h6 class="text-dark mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title font-size-20">
								Earning Summary
							</h4>
						</div>
						<div class="box-body py-0">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart41"></div>
												</div>
												<div>
													<h5>Top Order</h5>
													<h6 class="text-dark my-0 font-weight-500">$39k</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart42"></div>
												</div>
												<div>
													<h5>Average Order</h5>
													<h6 class="text-dark my-0 font-weight-500">$24k</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="charts_widget_43_chart"></div>							
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
						<div class="box-body text-center">							
							<img src="../images/trophy.png" class="mt-50" alt="" />
							<div class="max-w-500 mx-auto">
								<h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
								<p class="text-white mb-10 font-size-20">You've got 50.5% more sales today. You've reached 8th milestone, checkout author section</p>
							</div>
						</div>
					</div>
					<div class="row">						
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">18.8k</h2>
										<p class="text-mute mb-0 font-size-16">Total users</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">35.8k</h2>
										<p class="text-mute mb-0 font-size-16">Average reach per post</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-5 col-xl-6 col-12">
					<div class="box overflow-hidden">
						<div class="box-body p-0">
							<div class="row no-gutters">
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 rounded-0">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												Last Posts
											</h4>
										</div>
										<div class="box-body p-0">
											<div class="media-list media-list-hover">
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Meet Craftwork. Thoroghly Handpicked UI Freebies</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Cook Design Right!</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>5 Reasons to Start Bussi..</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>How to Make Interface</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>Show Me Your Design</h5>
											  </div>
											</a>
											<a class="media media-single hover-white" href="#">
											  <div class="media-body">
												<h5>She gave my mother such a turn, that I have always</h5>
											  </div>
											</a>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5" style="background-image: url(../images/gallery/landscape7.jpg)">
										<div class="box-header no-border">
											<h4 class="box-title mb-0">
												<span class="avatar avatar-lg bg-success">DK</span>
											</h4>
											<ul class="box-controls">
												<li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a></li>
											</ul>
										</div>
										<div class="box-body">
											<div class="text-right mt-100 pt-20">
												<h3 class="text-white"><small class="mr-10"><i class="fa fa-commenting"></i></small> 3</h3>
												<h2 class="text-white"><small class="mr-10"><i class="fa fa-heart"></i></small> 23</h2>
												<h1 class="text-white"><small class="mr-10"><i class="fa fa-eye"></i></small> 189</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-7 col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title font-size-20">Recent Stats</h4>
						</div>
						<div class="box-body">
							<div id="recent_trend"></div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column font-size-20">
								New Arrivals
								<small class="subtitle">More than 400+ new members</small>
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border mb-0">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-dark">products</span></th>
											<th style="min-width: 100px"><span class="text-dark">pruce</span></th>
											<th style="min-width: 100px"><span class="text-dark">deposit</span></th>
											<th style="min-width: 150px"><span class="text-dark">agent</span></th>
											<th style="min-width: 130px"><span class="text-dark">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary-light badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-success-light badge-lg">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-danger-light badge-lg">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													$45k
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2020 <a href="#">Psd to Html Expert</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
@endsection