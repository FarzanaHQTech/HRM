<?php
$employees = Allemployee::display();
// print_r($employees);
?>
<div class="content container-fluid pb-0">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">

                                        <h3 class="user-name m-t-0 mb-0">Jhon doe</h3>
                                        <h6 class="text-muted">UI/UX Design Team</h6>
                                        <small class="text-muted">Web Designer</small>
                                        <div class="staff-id">Employee ID : FT-0001</div>
                                        <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                        <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="#">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="#">johndoe@example.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Birthday:</div>
                                            <div class="text">24th July</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                        </li>
                                        <li>
                                            <div class="title">Gender:</div>
                                            <div class="text">Male</div>
                                        </li>
                                        <li>
                                            <div class="title">Reports to:</div>

                                            <div class="text">
                                                <div class="avatar-box">
                                                    <div class="avatar avatar-xs">
                                                        <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                    </div>
                                                </div>

                                                <a href="profile.html">
                                                    Jeffery Lalor
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa-solid fa-pencil"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">Profile</a></li>

                    <!-- <li class="nav-item" role="presentation"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Projects</a></li>

                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Bank &amp; Statutory <small class="text-danger">(Admin Only)</small></a></li>
                    <li class="nav-item" role="presentation"><a href="#emp_assets" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1" role="tab">Assets</a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active" role="tabpanel">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Passport No.</div>
                                    <div class="text">9876543210</div>
                                </li>
                                <li>
                                    <div class="title">Passport Exp Date.</div>
                                    <div class="text">9876543210</div>
                                </li>
                                <li>
                                    <div class="title">Tel</div>
                                    <div class="text"><a href="#">9876543210</a></div>
                                </li>
                                <li>
                                    <div class="title">Nationality</div>
                                    <div class="text">Indian</div>
                                </li>
                                <li>
                                    <div class="title">Religion</div>
                                    <div class="text">Christian</div>
                                </li>
                                <li>
                                    <div class="title">Marital status</div>
                                    <div class="text">Married</div>
                                </li>
                                <li>
                                    <div class="title">Employment of spouse</div>
                                    <div class="text">No</div>
                                </li>
                                <li>
                                    <div class="title">No. of children</div>
                                    <div class="text">2</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i class="fa-solid fa-pencil"></i></a></h3>
                            <h5 class="section-title">Primary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">John Doe</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Father</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">9876543210, 9876543210</div>
                                </li>
                            </ul>
                            <hr>
                            <h5 class="section-title">Secondary</h5>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Name</div>
                                    <div class="text">Karen Wills</div>
                                </li>
                                <li>
                                    <div class="title">Relationship</div>
                                    <div class="text">Brother</div>
                                </li>
                                <li>
                                    <div class="title">Phone </div>
                                    <div class="text">9876543210, 9876543210</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Bank information</h3>
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Bank name</div>
                                    <div class="text">ICICI Bank</div>
                                </li>
                                <li>
                                    <div class="title">Bank account No.</div>
                                    <div class="text">159843014641</div>
                                </li>
                                <li>
                                    <div class="title">IFSC Code</div>
                                    <div class="text">ICI24504</div>
                                </li>
                                <li>
                                    <div class="title">PAN No</div>
                                    <div class="text">TC000Y56</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#family_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
                            <div class="table-responsive">
                                <table class="table table-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship</th>
                                            <th>Date of Birth</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Leo</td>
                                            <td>Brother</td>
                                            <td>Feb 16th, 2019</td>
                                            <td>9876543210</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa-solid fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                <div>Bsc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                <div>Msc Computer Science</div>
                                                <span class="time">2000 - 2003</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fa-solid fa-pencil"></i></a></h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Info Tab -->

        <!-- Projects Tab -->
        <!-- <div class="tab-pane fade" id="emp_projects" role="tabpanel">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown profile-action">
                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
                            <small class="block text-ellipsis m-b-15">
                                <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                                <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                            </small>
                            <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. When an unknown printer took a galley of type and
                                scrambled it...
                            </p>
                            <div class="pro-deadline m-b-15">
                                <div class="sub-title">
                                    Deadline:
                                </div>
                                <div class="text-muted">
                                    17 Apr 2019
                                </div>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Project Leader :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Jeffery Lalor" data-bs-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-members m-b-15">
                                <div>Team :</div>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Doe" data-bs-original-title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Richard Miles" data-bs-original-title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="John Smith" data-bs-original-title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" aria-label="Mike Litorus" data-bs-original-title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" data-original-title="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /Projects Tab -->

        <!-- Bank Statutory Tab -->
        <!-- <div class="tab-pane fade" id="bank_statutory" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> Basic Salary Information</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-jojz" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-3-ot1h">Select salary basis type</option>
                                        <option>Hourly</option>
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-dslx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bnnu-container" aria-controls="select2-bnnu-container"><span class="select2-selection__rendered" id="select2-bnnu-container" role="textbox" aria-readonly="true" title="Select salary basis type">Select salary basis type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Payment type</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-vrum" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-6-dndd">Select payment type</option>
                                        <option>Bank transfer</option>
                                        <option>Check</option>
                                        <option>Cash</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-b0fx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-oe2z-container" aria-controls="select2-oe2z-container"><span class="select2-selection__rendered" id="select2-oe2z-container" role="textbox" aria-readonly="true" title="Select payment type">Select payment type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 class="card-title"> PF Information</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">PF contribution</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-bmcl" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-53pm">Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-zzh5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-qbgr-container" aria-controls="select2-qbgr-container"><span class="select2-selection__rendered" id="select2-qbgr-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">PF No. <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-218u" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-12-524y">Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-853m" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-t3kl-container" aria-controls="select2-t3kl-container"><span class="select2-selection__rendered" id="select2-t3kl-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee PF rate</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-13-7s23" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-15-gvgj">Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-d8vb" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-y6oq-container" aria-controls="select2-y6oq-container"><span class="select2-selection__rendered" id="select2-y6oq-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-16-f00n" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-18-3tm5">Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-r9qa" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-6pgf-container" aria-controls="select2-6pgf-container"><span class="select2-selection__rendered" id="select2-6pgf-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee PF rate</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-19-ua7r" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-21-d4i6">Select PF contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-20-bma5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-y79c-container" aria-controls="select2-y79c-container"><span class="select2-selection__rendered" id="select2-y79c-container" role="textbox" aria-readonly="true" title="Select PF contribution">Select PF contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-22-d833" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-24-8x9i">Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-23-ewef" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5jkx-container" aria-controls="select2-5jkx-container"><span class="select2-selection__rendered" id="select2-5jkx-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h3 class="card-title"> ESI Information</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">ESI contribution</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-25-1fal" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-27-264k">Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-26-zjzf" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-o37r-container" aria-controls="select2-o37r-container"><span class="select2-selection__rendered" id="select2-o37r-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-28-uu09" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-30-2bap">Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-29-ic16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ql7i-container" aria-controls="select2-ql7i-container"><span class="select2-selection__rendered" id="select2-ql7i-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee ESI rate</label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-31-4j7x" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-33-qa7j">Select ESI contribution</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-32-abcm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-tc60-container" aria-controls="select2-tc60-container"><span class="select2-selection__rendered" id="select2-tc60-container" role="textbox" aria-readonly="true" title="Select ESI contribution">Select ESI contribution</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                    <select class="select select2-hidden-accessible" data-select2-id="select2-data-34-lo1f" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-36-jal7">Select additional rate</option>
                                        <option>0%</option>
                                        <option>1%</option>
                                        <option>2%</option>
                                        <option>3%</option>
                                        <option>4%</option>
                                        <option>5%</option>
                                        <option>6%</option>
                                        <option>7%</option>
                                        <option>8%</option>
                                        <option>9%</option>
                                        <option>10%</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-35-gbmo" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-rlls-container" aria-controls="select2-rlls-container"><span class="select2-selection__rendered" id="select2-rlls-container" role="textbox" aria-readonly="true" title="Select additional rate">Select additional rate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Total rate</label>
                                    <input type="text" class="form-control" placeholder="N/A" value="11%">
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- /Bank Statutory Tab -->

        <!-- Assets -->
        <!-- <div class="tab-pane fade" id="emp_assets" role="tabpanel">
            <div class="table-responsive table-newdatatable">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-new custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 0px;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Asset ID: activate to sort column ascending" style="width: 0px;">Asset ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned Date: activate to sort column ascending" style="width: 0px;">Assigned Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assignee: activate to sort column ascending" style="width: 0px;">Assignee</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>






                                    <tr class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>
                                            <a href="assets-details.html" class="table-imgname">
                                                <img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
                                                <span>Laptop</span>
                                            </a>
                                        </td>
                                        <td>AST - 001</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>John Paul Raj</span>
                                                <p>john@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">2</td>
                                        <td>
                                            <a href="assets-details.html" class="table-imgname">
                                                <img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
                                                <span>Laptop</span>
                                            </a>
                                        </td>
                                        <td>AST - 002</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
                                                <img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Vinod Selvaraj</span>
                                                <p>vinod.s@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">3</td>
                                        <td>
                                            <a href="assets-details.html" class="table-imgname">
                                                <img src="assets/img/keyboard.png" class="me-2" alt="Keyboard Image">
                                                <span>Dell Keyboard</span>
                                            </a>
                                        </td>
                                        <td>AST - 003</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
                                                <img src="assets/img/profiles/avatar-03.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Harika </span>
                                                <p>harika.v@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">4</td>
                                        <td>
                                            <a href="#" class="table-imgname">
                                                <img src="assets/img/mouse.png" class="me-2" alt="Mouse Image">
                                                <span>Logitech Mouse</span>
                                            </a>
                                        </td>
                                        <td>AST - 0024</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="assets-details.html" class="table-profileimage">
                                                <img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="assets-details.html" class="table-name">
                                                <span>Mythili</span>
                                                <p>mythili@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">5</td>
                                        <td>
                                            <a href="#" class="table-imgname">
                                                <img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
                                                <span>Laptop</span>
                                            </a>
                                        </td>
                                        <td>AST - 005</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="assets-details.html" class="table-profileimage">
                                                <img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="assets-details.html" class="table-name">
                                                <span>John Paul Raj</span>
                                                <p>john@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">6</td>
                                        <td>
                                            <a href="#" class="table-imgname">
                                                <img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
                                                <span>Laptop</span>
                                            </a>
                                        </td>
                                        <td>AST - 006</td>
                                        <td>22 Nov, 2022 10:32AM</td>
                                        <td class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Vinod Selvaraj</span>
                                                <p>vinod.s@dreamguystech.com</p>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex">
                                                <a class="delete-table me-2" href="user-asset-details.html">
                                                    <img src="assets/img/icons/eye.svg" alt="Eye Icon">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /Assets -->

    </div>
</div>