<?php
// print_r($_REQUEST);
// print_r(Payslip::all(1))
?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h4 class="payslip-title">Payslip for the month of <span id="paydate"><?php echo date("F  Y", strtotime(date('Y-m'))) ?></span></h4>
				<div class="row">
					<div class="col-sm-6 m-b-20">
						<img src="<?= $base_url ?>/assets/img/logo2.png" class="inv-logo" alt="Logo">
						<ul class="list-unstyled mb-0">
							<li>Dreamguy's Technologies</li>
							<li>3864 Quiet Valley Lane,</li>
							<li>Sherman Oaks, CA, 91403</li>
						</ul>
					</div>
					<div class="col-sm-6 m-b-20">
						<div class="invoice-details">
							<h3 class="text-uppercase" id="payslip_id">Payslip #<?php echo date((date('Y'))) ?><?php echo str_pad(Payslip::get_last_id() + 1, 5, '0', STR_PAD_LEFT);  ?></h3>
							<ul class="list-unstyled">
								<li>Pay Date: <span id="paydate"><?php echo date("F d, Y", strtotime(date('Y-m-d'))) ?></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 m-b-20">
						<ul class="list-unstyled">
							<li>
								<h5 class="mb-0">
									<strong>
										<?php echo Allemployee::html_select("emp") ?>
										<!-- John Doe -->
									</strong>
								</h5>
							</li><br>

							<li>Designation :<span id="designation"></span></li>
							<li>Employee Id : <span id="emp_id"></span></li>
							<li id="joining_date"></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6">
							<div>
								<h4 class="m-b-10"><strong>Earnings</strong></h4>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Earning</th>

											<th>Amount</th>
											<th><strong><Span id="clearAll_earning"><button class="btn btn-danger ">Clear</Span></button></strong> </th>
										<tr>
											<th>
												<?php echo PayslipItem::html_earning_select("earning") ?>
											</th>
											<th>
												<input type="text" class="earning_amount">
											</th>

											<td><button class="btn btn-info add_earning" id="add_earning">Add</button></td>
										</tr>
									</thead>
									<tbody id="earning_appned">


										<tr>
										</tr>
									<tfoot>
										<tr>
											<th>Total Earnings</th>
											<td><strong></strong> <span class="float-end"><strong></strong></span></td>
										</tr>
									</tfoot>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div>
									<h4 class="m-b-10"><strong>Deductions</strong></h4>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Deduction</th>

												<th>Amount</th>
												<th><strong><button class="btn btn-danger">Clear</button></strong> </th>

											</tr>
											<tr>
												<th>
													<?php echo PayslipItem::html_deduction_select("deduction_id") ?>
												</th>
												<th><input type="text" class="deduction_amount"></th>
												<td><strong><button class="btn btn-info add_deduction">Add</button></strong></td>

											</tr>

										</thead>
										<tbody id="deduction_append">
											<tr>

											</tr>

										</tbody>
										<tfoot>
											<tr>
												<th>Total Deductions</th>
												<td><strong></strong> <span class="float-end"><strong></strong></span></td>
											</tr>
										</tfoot>
								</div>
								</table>
							</div>
						</div>
						<div>
							<button class="btn btn-primary process">Process</button>
						</div>
					</div>

					<div class="col-sm-12">
						<p><strong>Net Salary:<?php //echo  $net_salary
												?></strong> (Fifty nine thousand six hundred and ninety eight only.)</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(function() {

		var payslipCart = new Cart("payslip");
		printEarning()
		printDeduction()

		$("#emp").on("change", function() {
			let id = $(this).val()
			$.ajax({
				url: "<?php echo $base_url ?>/api/Employee/find",
				type: "get",
				data: {
					id: id
				},
				success: function(res) {
					let data = JSON.parse(res)
					// console.log();

					$("#designation").text(data.employee.designation);
					$("#emp_id").text(data.employee.id);

					// console.log(res);
				},
				error: function(res) {}
			})
		})



		$("#emp").on("change", function() {
			let employee_id = $(this).val();

			// Fetch leave deduction details
			$.ajax({
				url: "<?php echo $base_url ?>/api/leave/leave_deduction",
				type: "GET",
				data: {
					employee_id: employee_id
				},
				success: function(res) {
					let get_leave = JSON.parse(res);
					// console.log(get_leave);


					if (get_leave.success) {
						let leave_deduction_amount = get_leave.leave_deduction.unpaid_leave_amount;
						if (leave_deduction_amount != null) {

							let leave_deduction_item_id = "leave_deduction";
							// let leave_deduction_item_name = "Leave Deduction";

							$("#deduction_id").val(leave_deduction_item_id);
							$(".deduction_amount").val(leave_deduction_amount);

							let item = {
								item_id: get_leave.leave_deduction.
								payslip_item_id,

								item_name: get_leave.leave_deduction.name,
								item_amount: get_leave.leave_deduction.
								unpaid_leave_amount,
								factor: 2
							};
							// console.log(item);

							payslipCart.save(item);
							printDeduction();

						}
					} else {
						// console.log("No leave deduction data available");
					}
				},
				error: function(error) {
					console.error(error);
				}
			});
		});

		$("#emp").on("change", function() {
			let employee_id = $(this).val();
			$.ajax({
				url: "<?php echo $base_url ?>/api/employees/get_salary",
				type: "GET",
				data: {
					id: employee_id
				},
				success: function(res) {
					// console.log(res);
					let basic_salary = JSON.parse(res).basic_salary;
					console.log(basic_salary);
					let item = {
						item_id: basic_salary,
						item_name: "basic_salary",
						item_amount: basic_salary.basic_salary,
						factor: 1
					}
					payslipCart.save(item)
					printEarning()

				},
				error: function(error) {
					console.log(error);
				}
			})


		})



		$(".add_earning").on("click", function() {
			let earning_id = $("#earning").val();
			let earning_item_name = $("#earning option:selected").text();
			let earning_amount = $(".earning_amount").val();
			let item = {
				item_id: earning_id,
				item_name: earning_item_name,
				item_amount: earning_amount,
				factor: 1
			}
			// console.log(item);
			// save in local storage
			payslipCart.save(item)
			printEarning()
		})

		$(".add_deduction").on("click", function() {
			let deduction_id = $("#deduction_id").val();
			let deduction_item_name = $("#deduction_id option:selected").text(); // Fetch the name
			let deduction_amount = $(".deduction_amount").val();
			let item = {
				item_id: deduction_id,
				item_name: deduction_item_name, // This should contain the name
				item_amount: deduction_amount,
				factor: 2
			};
			payslipCart.save(item); // Save in local storage
			printDeduction();
		});




		// print earning
		function printEarning() {
			// get from local storage
			let payslip = payslipCart.getCart()
			// console.log(payslip);
			let html = "";
			payslip.forEach(element => {

				if (element.factor === 1) {
					html += ` <tr>
	  			<td>${element.item_name}</td>
	  			<td>${element.item_amount}</td>
	  			<td><button data-id="${element.item_id}" class="btn btn-warning delete_earning">R</button></td>
				</tr>
				`;
				}


			});
			// console.log(html);
			$("#earning_appned").html(html)

		}
		// print deduction
		function printDeduction() {
			// get from local storage
			let payslip = payslipCart.getCart()
			// console.log(payslip);
			let html = "";
			payslip.forEach(element => {
				if (element.factor === 2) {
					html += `

	<tr>
	 <td>${element.item_name}</td>
	 <td>${element.item_amount}</td>
	 <td><button data-id="${element.item_id}" class="btn btn-warning delete_deduction">R</button></td>
   </tr>
   `;
				}

			});
			// console.log(html);
			$("#deduction_append").html(html)

		}

		//delete earning

		$("body").on("click", ".delete_earning", function() {
			let id = $(this).data("id");
			payslipCart.delItem(id)
			printEarning()
		});

		$("body").on("click", ".delete_deduction", function() {
			let id = $(this).data("id");
			payslipCart.delItem(id)
			printDeduction()
		});

		$("#clearAll_earning").on("click", function() {
			payslipCart.clearCart();
			printDeduction()
			printEarning()
		});

		// process for get in database
		$(".process").on("click", function() {

			let emp_id = $("#emp").val()
			// let period = $("#period").text()
			let period = new Date().toLocaleString("default", {
				month: "long",
				year: "numeric"
			});
			let paydate = $("#paydate").text()
			let payslipdata = payslipCart.getCart()


			// console.log(payslipdata, paydate, period, emp_id);

			$.ajax({
				url: "<?php echo $base_url ?>/api/Payslip/payslipSave",
				type: "POST",
				data: {
					emp_id: emp_id,
					period: period,
					paydate: new Date().toJSON().slice(0, 10),
					payslipdata: payslipdata
				},
				success: function(res) {
					// console.log(res);
					// alert("payslip create successfully")
					window.location.replace("<?php echo $base_url ?>/payslip")
				},

				error: function(res) {}
			})


		})
		// console.log(payslipCart.getCart());




	})
</script>
<script src="<?php echo $base_url ?>/js/cart.js"></script>