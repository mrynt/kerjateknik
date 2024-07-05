@extends('layouts.AppOrganisasiLayout')

@section('content')
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<div class="panel-content">
					<h4 class="main-title">Job Posting Management</h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></i>
									<div class="event-figure">
										<h5>140</h5>
										<span>New Events</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 ">
							<div class="d-widget">
								<div class="event-stat">
									<i><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></i>
									<div class="event-figure">
										<h5>1200</h5>
										<span>Registered Users</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></i>
									<div class="event-figure">
										<h5>4021</h5>
										<span>Tickets Sold</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="d-widget">
								<div class="event-stat">
									<i>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></i>
									<div class="event-figure">
										<h5>$1400</h5>
										<span>Earnigns</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row merged20 mb-4">
						<div class="col-lg-12">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>All Job Posting</h5>
								</div>
								<table class="table table-default all-events table-striped table-responsive-lg">
									<thead>
										<tr>
											<th>ID#</th>
											<th>Client</th>
											<th>Event Name</th>
											<th>Venue</th>
											<th>Speakers</th>
											<th>Email</th>
											<th>Status</th>
											<th>Time</th>
											<th>Date</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1001</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic2.png" alt=""></figure> <span>Andrew</span></td>
											<td>Developers Meetup</td>
											<td>Antalia University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic1.png" alt="">
													<img src="images/resources/small-pic3.png" alt="">
													<span>9+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@gmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>10:PM</td>
											<td>Oct-12</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1002</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic1.png" alt=""></figure> <span>Maria K</span></td>
											<td>Doctors Meetup</td>
											<td>Punjab University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic1.png" alt="">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic3.png" alt="">
													<span>3+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-danger">Unpaid</td>
											<td>08:PM</td>
											<td>Oct-10</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1003</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic3.png" alt=""></figure> <span>Sandra</span></td>
											<td>Doctors Meetup</td>
											<td>King Advert University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic2.png" alt="">
													<img src="images/resources/small-pic4.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<span>1+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-primary">Pending</td>
											<td>07:PM</td>
											<td>Oct-10</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1004</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic4.png" alt=""></figure> <span>King Leo</span></td>
											<td>Cyber Monday</td>
											<td>Oxford University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic3.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<img src="images/resources/small-pic4.png" alt="">
													<span>2+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>11:PM</td>
											<td>Oct-09</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
										<tr>
											<td>1005</td>
											<td class="user-pic"><figure><img src="images/resources/small-pic5.png" alt=""></figure> <span>Alblert</span></td>
											<td>Hollowen Day</td>
											<td>USA University</td>
											<td>
												<div class="image-bunch">
													<img src="images/resources/small-pic4.png" alt="">
													<img src="images/resources/small-pic5.png" alt="">
													<img src="images/resources/small-pic1.png" alt="">
													<span>8+</span>
												</div>
											</td>
											<td><a href="#" title="">sample@cmail.com</a></td>
											<td class="text-success">Paid</td>
											<td>12:PM</td>
											<td>Oct-08</td>
											<td>
												<div class="button soft-danger"><i class="icofont-trash"></i></div>
												<div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
											</td>
										</tr>
									</tbody>
								</table>	
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>

@endsection()