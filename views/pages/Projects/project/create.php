<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Create Project</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> -->
          
        </button>
    </div>
    <div class="modal-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Project Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Client</label>
                        <select class="form-select form-controll">
                            <option data-select2-id="select2-data-6-ss62">Global Technologies</option>
                            <option>Delta Infotech</option>
                        </select>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Start Date</label>
                        <div class="cal-icon">
                            <input type="date" class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">End Date</label>
                        <!-- <input > -->
                        <div class="cal-icon">
                            <input type="date" class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Rate</label>
                        <input placeholder="$50" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-block mb-3">
                        <label class="col-form-label">&nbsp;</label>
                        <select class="form-select form-controll">
                            <option data-select2-id="select2-data-9-44wn">Hourly</option>
                            <option>Fixed</option>
                        </select>
                       
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Priority</label>
                        <select class="form-select form-controll">
                            <option data-select2-id="select2-data-12-jorh">High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
                      
                          
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Add Project Leader</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Team Leader</label>
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" class="avatar" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor">
                                <img src="<?php echo $base_url?>/assets/img/profiles/avatar-16.jpg" alt="User Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Add Team</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Team Members</label>
                        <div class="project-members">
                            <a href="#" data-bs-toggle="tooltip" class="avatar" aria-label="John Doe" data-bs-original-title="John Doe">
                                <img src="<?php echo $base_url?>/assets/img/profiles/avatar-16.jpg" alt="User Image">
                            </a>
                            <a href="#" data-bs-toggle="tooltip" class="avatar" aria-label="Richard Miles" data-bs-original-title="Richard Miles">
                                <img src="<?php echo $base_url?>/assets/img/profiles/avatar-09.jpg" alt="User Image">
                            </a>
                            <a href="#" data-bs-toggle="tooltip" class="avatar" aria-label="John Smith" data-bs-original-title="John Smith">
                                <img src="<?php echo $base_url?>/assets/img/profiles/avatar-10.jpg" alt="User Image">
                            </a>
                            <a href="#" data-bs-toggle="tooltip" class="avatar" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus">
                                <img src="<?php echo $base_url?>/assets/img/profiles/avatar-05.jpg" alt="User Image">
                            </a>
                            <span class="all-team">+2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-block mb-3">
                <!-- <textarea name="" id="">Describe About Your projects</textarea>
                <label class="col-form-label">Description</label> -->
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Describe Your Projects</label>
                </div>

                <div id="editor" style="display: none;">
                </div>
        
            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">Upload Files</label>
                <input class="form-control" type="file">
            </div>
            <div class="submit-section">
                <button class="btn btn-primary submit-btn">Submit</button>
            </div>
        </form>
    </div>
</div>