<div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="<?php echo $base_url?>/project/create" class="btn add-btn" ><i class="fa-solid fa-plus"></i> Create Project</a>
								<div class="view-icons">
									<a href="projects.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="project-list.html" class="list-view btn btn-link"><i class="fa-solid fa-bars"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Project Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="input-block mb-3 form-focus select-focus focused">
								<select class="form-select form-controll"> 
									<option data-select2-id="select2-data-3-2mmb">Select Designation</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
                               
								
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success w-100"> Search </a>  
						</div>     
                    </div>
					<!-- Search Filter -->
					
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
							<div class="card w-100">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="visually-hidden">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="visually-hidden">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" aria-label="40%" data-bs-original-title="40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
							<div class="card w-100">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">2</span> <span clasrs="text-muted">open tasks, </span>
										<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="visually-hidden">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="visually-hidden">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" aria-label="40%" data-bs-original-title="40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
							<div class="card w-100">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="visually-hidden">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="visually-hidden">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" aria-label="40%" data-bs-original-title="40%"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
							<div class="card w-100">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
											</li>
											<li>
												<a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="visually-hidden">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="visually-hidden">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" aria-label="40%" data-bs-original-title="40%"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>