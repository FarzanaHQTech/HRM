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
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>

		