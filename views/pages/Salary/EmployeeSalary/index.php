<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Employee Salary</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Salary</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_salary"><i class="fa-solid fa-plus"></i> Add Salary</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus select-focus">
								<select class="form-select form-controll"> 
									<option value="" data-select2-id="select2-data-3-av98"> -- Select Role--- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
                               
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
							<div class="input-block mb-3 form-focus select-focus focused">
								<select class="form-select form-controll"> 
									<option data-select2-id="select2-data-6-mkac"> -- Select Leave Status-- </option>
									<option> Pending </option>
									<option> Approved </option>
									<option> Rejected </option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
					   <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="input-block mb-3 form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped custom-table datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
									<thead>
										<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" style="width: 276.016px;">Employee</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Employee ID: activate to sort column ascending" style="width: 86.2656px;">Employee ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 194.406px;">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Join Date: activate to sort column ascending" style="width: 65.5625px;">Join Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 151.234px;">Role</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 47.625px;">Salary</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payslip: activate to sort column ascending" style="width: 101.844px;">Payslip</th><th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 45.4062px;">Action</th></tr>
									</thead>
									<tbody>
										
										
										
										
										
										
										
										
										
										
										
									<tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt="User Image"></a>
													<a href="profile.html">Bernardo Galaviz <span>Web Developer</span></a>
												</h2>
											</td>
											<td>FT-0007</td>
											<td>bernardogalaviz@example.com</td>
											<td>1 Jan 2014</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$38400</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													<a href="profile.html">Jeffery Lalor <span>Team Leader</span></a>
												</h2>
											</td>
											<td>FT-0009</td>
											<td>jefferylalor@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$73550</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt="User Image"></a>
													<a href="profile.html">Jeffrey Warden <span>Web Developer</span></a>
												</h2>
											</td>
											<td>FT-0006</td>
											<td>jeffreywarden@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$45000</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													<a href="profile.html">John Doe <span>Web Designer</span></a>
												</h2>
											</td>
											<td>FT-0001</td>
											<td>johndoe@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Designer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$59698</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													<a href="profile.html">John Smith <span>Android Developer</span></a>
												</h2>
											</td>
											<td>FT-0003</td>
											<td>johnsmith@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$48200</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
													<a href="profile.html">Lesley Grauer <span>Team Leader</span></a>
												</h2>
											</td>
											<td>FT-0008</td>
											<td>lesleygrauer@example.com</td>
											<td>1 Jun 2015</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Team Leader </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$75500</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
													<a href="profile.html">Loren Gatlin <span>Android Developer</span></a>
												</h2>
											</td>
											<td>FT-0010</td>
											<td>lorengatlin@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$55000</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													<a href="profile.html">Mike Litorus <span>IOS Developer</span></a>
												</h2>
											</td>
											<td>FT-0004</td>
											<td>mikelitorus@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">IOS Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$59698</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="odd">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													<a href="profile.html">Richard Miles <span>Web Developer</span></a>
												</h2>
											</td>
											<td>FT-0002</td>
											<td>richardmiles@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Web Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$72000</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr><tr class="even">
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
													<a href="profile.html">Tarah Shropshire <span>Android Developer</span></a>
												</h2>
											</td>
											<td>FT-0011</td>
											<td>tarahshropshire@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Android Developer </a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Software Engineer</a>
														<a class="dropdown-item" href="#">Software Tester</a>
														<a class="dropdown-item" href="#">Frontend Developer</a>
														<a class="dropdown-item" href="#">UI/UX Developer</a>
													</div>
												</div>
											</td>
											<td>$92400</td>
											<td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate Slip</a></td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_salary"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_salary"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr></tbody>
								</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
							</div>
						</div>
					</div>
                </div>