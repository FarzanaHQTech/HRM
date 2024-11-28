<?php $clients = Client::display();
?>

<div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Clients</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Clients</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="<?= $base_url?>/client/create" class="btn add-btn"  data-bs-target="#add_client"><i class="fa-solid fa-plus"></i> Add Client</a>
								<div class="view-icons">
									<a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="clients-list.html" class="list-view btn btn-link"><i class="fa-solid fa-bars"></i></a>
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
								<label class="focus-label">Client ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="input-block mb-3 form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Client Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="">
								<select class="form-select form-control" > 
									<option >Select Company</option>
									<option>Global Technologies</option>
									<option>Delta Infotech</option>
								</select>
                           
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="d-grid">
								<a href="#" class="btn btn-success"> Search </a>  
							</div>  
						</div>     
                    </div>
					<!-- Search Filter -->
					
					<div class="row staff-grid-row">
					<?php foreach($clients as $value):?>
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3 d-flex">
						
							<div class="profile-widget w-100">
								<div class="profile-img">
									<a href="client-profile.html" class="avatar"><img src="<?= $base_url?>/img/client/<?php echo $value['image']?>" alt="User Image"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html"><?php echo $value['company_name']?></a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html"><?php echo $value['client_name']?></a></h5>
								<div class="small text-muted">CEO</div>
								<a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>
					<?php endforeach;?>
					</div>

                </div>