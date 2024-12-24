
              <?php $clients = Client::display();

              ?>
              <div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Add New Company</h5>

					</div>
					<div class="modal-body p-0" data-select2-id="select2-data-69-mrfp">
						<div class="add-details-wizard">


                                <ul id="progressbar" class="progress-bar-wizard">
								<li class="active">
									<span><i class="la la-user-tie"></i></span>
									<div class="multi-step-info">
										<h6>Basic Info</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="add-info-fieldset" data-select2-id="select2-data-68-rx7u">
							<fieldset id="first-field" data-select2-id="select2-data-first-field">
								<form action="<?php echo $base_url ?>/allcompany/save"  enctype="multipart/form-data" method="post">
									<div class="form-upload-profile">
										<h6 class="">Profile Image <span> *</span></h6>
										<div class="profile-pic-upload">
											<div class="profile-pic">
												<span><img src="<?php echo $base_url ?>/assets/img/icons/profile-upload-img.svg" alt="Img"></span>
											</div>
											<div class="employee-field">
												<div class="mb-0">
													<div class="image-upload mb-0">
														<input type="file" name="photo">
														<div class="image-uploads">
															<h4>Upload</h4>
														</div>
													</div>
												</div>
												<div class="img-reset-btn">
													<a href="#">Reset</a>
												</div>
											</div>
										</div>
									</div>
									<div class="contact-input-set" data-select2-id="select2-data-66-3odn">
										<div class="row">
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Company Name <span class="text-danger">*</span></label>
													<input class="form-control" type="text" name="company_name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<div class="d-flex justify-content-between align-items-center">
														<label class="col-form-label">Email <span class="text-danger"> *</span></label>

														<div class="status-toggle small-toggle-btn d-flex align-items-center">
															<span class="me-2 label-text">Option</span>
															<input type="checkbox" id="user2" class="check" checked="">
															<label for="user2" class="checktoggle"></label>
														</div>
													</div>
													<input class="form-control" type="email" name="email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Phone Number 1<span class="text-danger"> *</span></label>
													<input class="form-control" type="text" name="mobile">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Location <span class="text-danger"> *</span></label>
													<input class="form-control" type="text" name="address">
												</div>
											</div>
											<div class="col-md-6">
                                            <label class="col-form-label">Industry <span class="text-danger">*</span></label>
													<select class="form-select form-controll" name="client">

														<option data-select2-id="select2-data-18-pnvm">Select</option>
                                                        <?php foreach ($clients as $client): ?>
														<option value="<?php echo $client['id'] ?>"><?=$client['client_name']?></option>
                                                        <?php endforeach;?>

													</select>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Website</label>
													<input class="form-control" type="text" name="url">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3" data-select2-id="select2-data-75-sxgf">
													<label class="col-form-label">Reviews <span class="text-danger">*</span></label>
													<select  class="form-select form-controll"  name="review">
														<option data-select2-id="select2-data-9-pk2i">Select</option>
														<option data-select2-id="select2-data-76-hr6s">Lowest</option>
														<option data-select2-id="select2-data-77-r24f">Highest</option>
													</select>

												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3" data-select2-id="select2-data-65-8jwy">
													<label class="col-form-label">Owner <span class="text-danger">*</span></label>
													<select class="form-select form-controll" name="owner">
														<option data-select2-id="select2-data-12-y2h7">Select</option>
														<option data-select2-id="select2-data-71-ujc2">Hendry</option>
														<option data-select2-id="select2-data-72-7h2c">Guillory</option>
														<option data-select2-id="select2-data-73-of6b">Jami</option>
													</select>

												</div>
											</div>

											<div class="col-lg-12 text-end form-wizard-button">
												<button class="button btn-lights reset-btn" type="reset">Reset</button>
												<button class="btn btn-primary wizard-next-btn" type="submit" name="btnSave">Save </button>
											</div>
										</div>
									</div>
								</form>
							</fieldset>

						</div>
					</div>
				</div>