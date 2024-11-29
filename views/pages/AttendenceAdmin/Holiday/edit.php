<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Holiday</h5>
								
							</div>
							<div class="modal-body">
								<form action="<?php echo $base_url?>/holiday/save" method="post">
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text" name="holiday_name" id="holiday_name">
									</div>
									<div class="input-block mb-3">
										<label class="col-form-label">Holiday Date <span class="text-danger">*</span></label>
										<input class="form-control datetimepicker" type="date" name="holiday_date" id="holiday_date"></div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" name="btnCreate" id="btnSave">Submit</button>
									</div>
								</form>
							</div>
						</div>
