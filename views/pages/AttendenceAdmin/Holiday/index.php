<?php $holidays =Holiday::display();
?>

<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Holidays 2019</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Holidays</li>
								</ul>
							</div>
							<div class="col-auto float-end ms-auto">
								<a href="<?php echo $base_url?>/holiday/create" class="btn add-btn" id="btnAdd" ><i class="fa-solid fa-plus"></i> Add Holiday</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Title </th>
											<th>Holiday Date</th>
											<th >Action</th>
											<!-- <th>Day</th> -->
											
										</tr>
									</thead>
									<tbody>
										<?php foreach($holidays as $value):?>
										<tr class="holiday-completed">
											<td><?= $value['id']?></td>
											<td><?= $value['holiday_name']?></td>
											<td><?= $value['holiday_date']?></td>
											<td><a href="<?php echo $base_url?>/holiday/edit/<?= $value['id']?>" class="btn btn-primary">Edit</a>
											<a href="<?php echo $base_url?>/holiday/delete/<?= $value['id']?>" class="btn btn-danger">Delete</a>
										</td>
										</tr>
										<?php endforeach;?>
										<!-- <tr class="holiday-completed">
											<td>2</td>
											<td>Good Friday</td>
											<td>14 Apr 2019</td>
											<td>Friday</td>
											<td></td>
										</tr>
										<tr class="holiday-completed">
											<td>3</td>
											<td>May Day</td>
											<td>1 May 2019</td>
											<td>Monday</td>
											<td class="text-center">
											</td>
										</tr>
										<tr class="holiday-completed">
											<td>4</td>
											<td>Memorial Day</td>
											<td>28 May 2019</td>
											<td>Monday</td>
											<td class="text-center">
											</td>
										</tr>
										<tr class="holiday-completed">
											<td>5</td>
											<td>Ramzon</td>
											<td>26 Jun 2019</td>
											<td>Monday</td>
											<td></td>
										</tr>
										<tr class="holiday-upcoming">
											<td>6</td>
											<td>Bakrid</td>
											<td>2 Sep 2019</td>
											<td>Saturday</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr class="holiday-upcoming">
											<td>7</td>
											<td>Deepavali</td>
											<td>18 Oct 2019</td>
											<td>Wednesday</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr class="holiday-upcoming">
											<td>8</td>
											<td>Christmas</td>
											<td>25 Dec 2019</td>
											<td>Monday</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>

			<!-- <script>
				$(function(){
					$("#btnAdd").on("click",function(e){
						e.preventDefault();
						let html = ``;

					$("#btnAdd").html(html);
					})
				})
			</script>

<form action=""></form> -->

<!-- <script>
    $(function(){
        confirm("Are you sure to delete");
    })
</script> -->
