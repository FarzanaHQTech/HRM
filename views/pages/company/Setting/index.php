<?php
$companies = Company::display();
?>

<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<?php foreach($companies as $value):?>
											<label class="col-form-label">Company Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="<?= $value['company_name']?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Contact Person</label>
											<input class="form-control " value=" Daniel Porter" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Address</label>
											<input class="form-control " value="<?= $value['address']?>" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Country</label>
											<!-- <select class="form-control select">
												<option>USA</option>
												<option>United Kingdom</option>
											</select> -->
											<input class="form-control" value="<?= $value['country']?>" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="input-block mb-3">
											<label class="col-form-label">City</label>
											<input class="form-control" value="Sherman Oaks" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="input-block mb-3">
											<label class="col-form-label">State/Province</label>
											<select class="form-control select">
												<option>California</option>
												<option>Alaska</option>
												<option>Alabama</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="input-block mb-3">
											<label class="col-form-label">Postal Code</label>
											<input class="form-control" value="<?= $value['postal_code']?>" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Email</label>
											<input class="form-control" value="<?= $value['email']?>" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Phone Number</label>
											<input class="form-control" value="<?= $value['mobile']?>" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Mobile Number</label>
											<input class="form-control" value="<?= $value['mobile']?>" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Fax</label>
											<input class="form-control" value="818-978-7102" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Website Url</label>
											<input class="form-control" value="<?= $value['url']?>" type="text">
										</div>
									</div>
									<?php endforeach;?>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>