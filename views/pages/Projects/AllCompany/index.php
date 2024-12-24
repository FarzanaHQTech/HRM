<?php
$companies = AllCompany::display();
// print_r($companies);
// die();
?>
<div class="content container-fluid" data-select2-id="select2-data-110-v2eu">

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
					<a href="<?= $base_url ?>/allcompany/create" class="btn add-btn"><i class="la la-plus-circle"></i> Add Company</a>
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
					<select class="select floating select2-hidden-accessible" data-select2-id="select2-data-1-fwnt" tabindex="-1" aria-hidden="true">
						<option data-select2-id="select2-data-3-in5j">--Select--</option>
						<option>Germany</option>
						<option>USA</option>
						<option>Canada</option>
						<option>India</option>
						<option>China</option>
					</select>

					<label class="focus-label">Location</label>
				</div>
			</div>
			<div class="col-xl-2">
				<a href="#" class="btn btn-success w-100"> Search </a>
			</div>
		</div>
	</div>
	<hr>
	<!-- /Search Filter -->
	<div class="filter-section" data-select2-id="select2-data-109-vt1o">
		<ul data-select2-id="select2-data-108-th9q">
			<li>
				<div class="view-icons">
					<a href="companies.html" class="list-view btn btn-link active"><i class="las la-list"></i></a>
					<a href="companies-grid.html" class="grid-view btn btn-link"><i class="las la-th"></i></a>
				</div>
			</li>

	</div>
	</li>

	<!-- <li>
		<div class="search-set">
			<div class="search-input">
				<a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
				<div class="dataTables_filter">
					<label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
				</div>
			</div>
		</div>
	</li> -->
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
				<div class="row">

				</div>
				<div class="col-sm-12 col-md-6">

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-striped custom-table datatable contact-table dataTable no-footer">
						<thead>
							<tr role="row">
								<th class="" colspan="1" style="width: 13.75px;"></th>
								<th class="sorting" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 158.031px;">Name</th>
								<th class="sorting" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 84.1875px;">Phone</th>
								<th class="sorting" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 175.219px;">Email</th>
								<!-- <th class="sorting"  colspan="1" aria-label="Tags: activate to sort column ascending" style="width: 88.3594px;">Tags
											</th> -->
								<th class="sorting" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 59.7812px;">Location</th>
								<th class="sorting" colspan="1" aria-label="Rating: activate to sort column ascending" style="width: 44.1094px;">Rating</th>
								<th class="sorting" colspan="1" aria-label="Owner: activate to sort column ascending" style="width: 53.625px;">Owner</th>
								<th class="sorting" colspan="1" aria-label="Contact : activate to sort column ascending" style="width: 143px;">Contact </th>
								<th class="sorting" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 77.4531px;">Status</th>
								<th class="text-end sorting" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 45.4062px;">Action</th>
							</tr>
						</thead>
						<tbody>








							<?php foreach ($companies as $company): ?>

								<tr class="odd">
									<td class="sorting_1">
										<div class="set-star star-select">
											<i class="fa fa-star filled"></i>
										</div>
									</td>
									<td>
										<h2 class="table-avatar d-flex align-items-center">
											<a href="company-details.html" class="company-img"><img src="<?= $base_url ?>/img/client_company/<?php echo $company['image'] ?>" alt="User Image"></a>
											<a href="company-details.html" class="profile-split"><?php echo $company['company_name'] ?></a>
										</h2>
									</td>
									<td><?php echo $company['mobile'] ?></td>
									<td><?php echo $company['email'] ?></td>
									<!-- <td><span class="badge badge-soft-info">Promotion</span></td> -->
									<td><?php echo $company['address'] ?></td>
									<td>
										<!-- <div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.2
												</div> -->
										<?php echo $company['review'] ?>
									</td>
									<td><?php echo $company['client'] ?></td>
									<td>
										<?php echo $company['mobile'] ?>


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
												<a class="dropdown-item" href="#"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
												<a class="dropdown-item" href="#"><i class="la la-file-prescription"></i> Notes</a>
											</div>
										</div>
									</td>
								</tr>

								</tr>

							<?php endforeach; ?>

						</tbody>


					</table>


				</div>
			</div>
		</div>
	</div>