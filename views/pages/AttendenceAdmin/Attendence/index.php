<?php $employees = Allemployee::display() ?>

<div class="content container-fluid">

	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">Attendance</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Attendance</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	<h2>Admin Checked</h2>
	<label for="">Check All</label>
	<input type="checkbox" name="present" class="form-check-input check_all" >
	<hr>
	<div class="col-md-12">
		<h3 class="mb-4 text-center">Employee Attendance</h3>
		<div class="table-responsive">
			<table class="table table-striped custom-table mb-0">
				<thead class="table-primary">
					<tr>
						<th>#</th>
						<th>Employee ID</th>
						<th>Employee Name</th>
						<th>Present</th>
						<th>Check-In Time</th>
						<th>Check-Out Time</th>
						<th>Remarks</th>
					</tr>
				</thead>
				<tbody >
					<!-- Example row for employee attendance -->
					<?php foreach ($employees as $value): ?>
						<tr>

							<td>1</td>
							<td><?php echo $value['id'] ?></td>
							<td><?php echo $value['first_name'] . " " . $value['last_name'] ?></td>

							<td>
								<input type="checkbox" name="present" class="form-check-input employee">
							</td>
							<td>
								
								<input type="time" class="form-control employee" name="check_in" value="09:00">
							</td>
							<td>
								<input type="time" class="form-control employee" name="check_out" value="17:00">
							</td>
							<td>
								<input type="text" class="form-control employee" name="remarks" placeholder="Any remarks">
							</td>

						</tr>
					<?php endforeach; ?>
					<!-- <tr>
                    <td>2</td>
                    <td>EMP002</td>
                    <td>Jane Smith</td>
                    <td>
                        <input type="checkbox" name="present" class="form-check-input">
                    </td>
                    <td>
                        <input type="time" class="form-control" name="check_in">
                    </td>
                    <td>
                        <input type="time" class="form-control" name="check_out">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="remarks" placeholder="Any remarks">
                    </td>
                </tr> -->
					<!-- Add more rows as needed -->
				</tbody>
			</table>
		</div>
		<div class="text-end mt-3">
			<button class="btn btn-success" id="btnCheck">Submit Attendance</button>
		</div>
	</div>

	<script>
		$(function() {
			// alert()
			$(".check_all").on("change", function() {
				// alert("Checkbox state changed!");

				let allCheck =$(this).is(":checked");
				$(".employee").prop("checked",allCheck);
			});

			$("#btnCheck").on("click",function(){
			let employee =[];
				$(".employee:checked").each(function(){
					
					let row = $(this).closest("tr");
					let id = row.find("td:nth-child(2)").text()
					let name = row.find("td:nth-child(3)").text();

					employee.push({id:id,name:name})
				})
				console.log(employee);
				
			})
		});
	</script>

	<!-- <script>
    $(function() {
        // Check all functionality
        $(".check_all").on("change", function() {
            let allCheck = $(this).is(":checked");
            $(".employee").prop("checked", allCheck);
        });

        // Submit attendance
        $("#btnCheck").on("click", function() {
            let employee = []; // Initialize the array to hold employee data
            
            $(".employee:checked").each(function() {
                // Find the closest table row and extract the data from sibling cells
                let row = $(this).closest("tr");
                let id = row.find("td:nth-child(2)").text(); // Employee ID
                let name = row.find("td:nth-child(3)").text(); // Employee Name
                
                employee.push({ id: id, name: name });
            });

            console.log(employee); // Output the collected data
        });
    });
</script> -->
