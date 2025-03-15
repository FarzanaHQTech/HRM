<?php
// print_r($_REQUEST);
// print_r($payslipDetails = PayslipDetail::find_details($payslip->id));
?>






<div class="content container-fluid pb-0">

	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Payslip</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Payslip</li>
				</ul>
			</div>
			<div class="col-auto float-end ms-auto">
				<div class="btn-group btn-group-sm">
					<button class="btn btn-white">CSV</button>
					<button class="btn btn-white btn_print" onclick="print()">PDF</button>
					<button class="btn btn-white"><i class="fa-solid fa-print fa-lg onclick=" print()""></i> Print</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">

					<h4 class="payslip-title">Payslip for the month of <?= date("F, Y", strtotime($payslip->period)) ?></h4>
					<div class="row">
						<div class="col-sm-6 m-b-20">
							<img src="<?php echo $base_url ?>/assets/img/logo2.png" class="inv-logo" alt="Logo">
							<ul class="list-unstyled mb-0">
								<li><strong>Dreamguy's Technologies</strong></li>
								<li><strong>3864 Quiet Valley Lane,</strong></li>
								<li><strong>Sherman Oaks, CA, 91403</strong></li>
							</ul>
						</div>
						<div class="col-sm-6 m-b-20">
							<div class="invoice-details">
								<h3 class="text-uppercase">Payslip #<?php echo date((date('Y'))) ?>
									<?php echo str_pad(Payslip::get_last_id() + 1, 5, '0', STR_PAD_LEFT);  ?></h3>
								<ul class="list-unstyled">
									<li><strong>Salary Date: <span><?= date("F d, Y", strtotime($payslip->paydate)) ?></span></strong></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 m-b-20">
							<ul class="list-unstyled">
								<li>
									<h5 class="mb-0"><strong><?php echo Allemployee::search($payslip->employee_id)->first_name ?></strong></h5>
								</li>
								<li><strong><span><?php Allemployee::search($payslip->employee_id)->designation ?></span></strong></li>
								<li><strong>Employee ID: <?= Allemployee::search($payslip->employee_id)->id ?></strong></li>
								<li><strong>Joining Date: <?= date("j M Y", strtotime(Allemployee::search($payslip->employee_id)->joining_date)) ?></strong></li>

							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div>
								<h4 class="m-b-10"><strong>Earnings</strong></h4>
								<table class="table table-bordered">
									<tbody>

										<?php
										$payslip_details = PayslipDetail::find_details($payslip->id);

										$earnings = [];
										$deductions = [];
										$total_earnings = 0;
										$total_deduction = 0;



										$processed_ids = []; // Track processed item IDs

										foreach ($payslip_details as $detail) {
											$item_name = PayslipItem::find($detail['payslip_item_id'])->name;
											// print_r($item_name);
											// die();
											$amount = (float) $detail['amount'];

											if (in_array($detail['payslip_item_id'], $processed_ids)) {
												continue; // Skip duplicate entries
											}

											$processed_ids[] = $detail['payslip_item_id'];

											if ($detail['payslip_factor'] == 1) {
												$earnings[] = [
													'name' => $item_name,
													'amount' => $amount,
												];
												$total_earnings += $amount;
											} elseif ($detail['payslip_factor'] == 2) {
												$deductions[] = [
													'name' => $item_name,
													'amount' => $amount,
												];
												$total_deduction += $amount;
											}
										}

										foreach ($earnings as $earning_item) {
											echo "<tr>
														  <td><strong>{$earning_item['name']}</strong> <span class='float-end'>$ {$earning_item['amount']}</span></td>
													  </tr>";
										}
										echo "<td><strong>Total Earnings</strong> <span class='float-end'><strong>$ {$total_earnings}</strong></span></td>";

										?>


									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							<div>
								<h4 class="m-b-10"><strong>Deductions</strong></h4>
								<table class="table table-bordered">
									<tbody>

										<?php
										foreach ($deductions as $deduction_item) {
											echo "<tr>
         				    						 <td><strong>{$deduction_item['name']}</strong> <span class='float-end'>$ {$deduction_item['amount']}</span></td>
         				 						</tr>";
										}
										echo "<td><strong>Total Deduction</strong> <span class='float-end'><strong>$ {$total_deduction}</strong></span></td>";

										?>

									</tbody>

								</table>

							</div>
						</div>
						<div class="col-sm-12">
							<table class="table table-primary w-50">
								<tbody>
									<tr>
										<th><strong>Net Salary :
												<?php
												$net_salary = 0;
												$net_salary = $total_earnings - $total_deduction;
												echo "$" . $net_salary;
												?>

											</strong></th>
									</tr>
								</tbody>
							</table>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	// $(function() {
	// 	console.log(payslipCart.getCart());
	// })
</script>