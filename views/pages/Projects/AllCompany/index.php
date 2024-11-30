<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col-md-4">
								<h3 class="page-title">Companies</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Companies</li>
								</ul>
							</div>
							<div class="col-md-8 float-end ms-auto">
								<div class="d-flex title-head">
									<div class="view-icons">
										<a href="#" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
										<a href="#" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
										<a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
									</div>
									<div class="form-sort">
										<a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
									</div>
									<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i class="la la-plus-circle"></i> Add Company</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="filter-filelds" id="filter_inputs">
						<div class="row filter-row">
							<div class="col-xl-2">  
								 <div class="input-block mb-3 form-focus">
									 <input type="text" class="form-control floating">
									 <label class="focus-label">Company Name</label>
								 </div>
							</div>
							<div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Email</label>
								</div>
						   </div>
						   <div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Phone Number</label>
								</div>
							</div>
							<div class="col-xl-2">  
								 <div class="input-block mb-3 form-focus focused">
									<input type="text" class="form-control  date-range bookingrange">
									 <label class="focus-label">From - To Date</label>
								 </div>
							 </div>
							<div class="col-xl-2"> 
								<div class="input-block mb-3 form-focus select-focus focused">
									<select class="form-select form-controll"> 
										<option data-select2-id="select2-data-3-5aus">--Select--</option>
										<option>Germany</option>
										<option>USA</option>
										<option>Canada</option>
										<option>India</option>
										<option>China</option>
									</select>
                                  
								</div>
							</div>
							<div class="col-xl-2">  
								 <a href="#" class="btn btn-success w-100"> Search </a>  
							</div>     
						 </div>
					</div>
					 <hr>
					 <!-- /Search Filter -->
					<div class="filter-section">
						<ul>
							<li>
								<div class="view-icons">
									<a href="companies.html" class="list-view btn btn-link active"><i class="las la-list"></i></a>
									<a href="companies-grid.html" class="grid-view btn btn-link"><i class="las la-th"></i></a>
								</div>
							</li>
							<li>
							
							</li>
							<li>
								<div class="form-sorts dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="las la-filter me-2"></i>Filter</a>
									<div class="filter-dropdown-menu">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rating<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked="">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<span>5.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<span>4.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>3.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>2.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>1.0</span>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Owner<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked="">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Hendry</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Guillory</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Jami</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Theresa</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Espinosa</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked="">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Promotion</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rated</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rejected</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Collab</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Calls</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="filter-reset-btns">
												<a href="#" class="btn btn-light">Reset</a>
												<a href="#" class="btn btn-primary">Filter</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="search-set">
									<div class="search-input">
										<a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
										<div class="dataTables_filter">
											<label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
	
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped custom-table datatable contact-table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
									<thead>
										<tr role="row"><th class="no-sort sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 13.75px;"></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 158.031px;">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 84.1875px;">Phone</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 175.219px;">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 88.3594px;">Tags</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 59.7812px;">Location</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rating: activate to sort column ascending" style="width: 44.1094px;">Rating</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Owner: activate to sort column ascending" style="width: 53.625px;">Owner</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Contact : activate to sort column ascending" style="width: 143px;">Contact </th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 77.4531px;">Status</th><th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 45.4062px;">Action</th></tr>
									</thead>
									<tbody>
										
										
										
										
										
										
										
										
										
										
									<tr class="odd">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-01.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">NovaWaveLLC</a>
												</h2>
											</td>
											<td>+1 875455453</td>
											<td>robertson@example.com</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>Germany</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.2
												</div>
											</td>
											<td>Hendry</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-02.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">BlueSky Industries</a>
												</h2>
											</td>
											<td>+1 989757485</td>
											<td>sharon@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>USA</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Guillory</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-03.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">SilverHawk</a>
												</h2>
											</td>
											<td>+1 546555455</td>
											<td>vaughan12@example.com</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>Canada</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.5
												</div>
											</td>
											<td>Jami</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-danger "> Inactive </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-04.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">SummitPeak</a>
												</h2>
											</td>
											<td>+1 454478787</td>
											<td>jessica13@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>India</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.5
												</div>
											</td>
											<td>Theresa</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success ">Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-05.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">RiverStone Ventur</a>
												</h2>
											</td>
											<td>+1 124547845</td>
											<td>caroltho3@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>China</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.7
												</div>
											</td>
											<td>Espinosa</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-06.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">Bright Bridge Grp</a>
												</h2>
											</td>
											<td>+1 478845447</td>
											<td>dawnmercha@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>Japan</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Martin</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-07.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">CoastalStar Co.</a>
												</h2>
											</td>
											<td>+1 215544845</td>
											<td>rachel@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>Indonesia</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.1
												</div>
											</td>
											<td>Newell</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-08.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">HarborView</a>
												</h2>
											</td>
											<td>+1 121145471</td>
											<td>jonelle@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>Cuba</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Janet</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-09.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">Golden Gate Ltd</a>
												</h2>
											</td>
											<td>+1 321454789</td>
											<td>jonathan@example.com</td>
											<td><span class="badge badge-soft-danger me-2">Collab</span><span class="badge badge-soft-purple">Calls</span></td>
											<td>Isreal</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>2.7
												</div>
											</td>
											<td>Craig</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex align-items-center">
													<a href="company-details.html" class="company-img"><img src="assets/img/icons/company-icon-10.svg" alt="User Image"></a>
													<a href="company-details.html" class="profile-split">Redwood Inc</a>
												</h2>
											</td>
											<td>+1 278907145</td>
											<td>brook@example.com</td>
											<td><span class="badge badge-soft-purple">Calls</span></td>
											<td>Colombia</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.0
												</div>
											</td>
											<td>Daniel</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success"> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr></tbody>
								</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
							</div>
						</div>
					</div>
                </div>