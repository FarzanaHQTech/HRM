<!-- <?php // $employees = Allemployee::search($id)
        ?>

<div class="row staff-grid-row">
  
    <?php //endforeach; 
    ?>
</div> -->
<!--  -->
<?php

$employee = Allemployee::search($id);
?>

<?php //if (isset($employee)): 
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
    <?php if (isset($employee)): ?>
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#"><img src="<?= $base_url ?>/img/employees/<?= htmlspecialchars($employee->image) ?>" alt="User Image"></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">

                                            <h3 class="user-name m-t-0 mb-0">
                                                <?php //echo // htmlspecialchars($selected_employee['first_name'] . ' ' . $selected_employee['last_name']); 
                                                ?>

                                                <?= htmlspecialchars($employee->first_name . ' ' . $employee->last_name) ?>
                                            </h3>
                                            <h6 class="text-muted"><?= htmlspecialchars($employee->department) ?> Team</h6>
                                            <small class="text-muted"><?= htmlspecialchars($employee->designation) ?></small>
                                            <div class="staff-id">Employee ID : FT-000<?= htmlspecialchars($employee->id) ?></div>
                                            <div class="small doj text-muted">Date of Join : <?= htmlspecialchars(date('m F ,Y', strtotime($employee->joining_date))) ?></div>
                                            <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Phone:</div>
                                                <div class="text"><a href="#"><?= htmlspecialchars($employee->mobile) ?></a></div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="#"><?= htmlspecialchars($employee->email) ?></a></div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text"><?= htmlspecialchars(date('m F,Y', strtotime($employee->dob))) ?></div>
                                            </li>
                                            <li>
                                                <div class="title">Address:</div>
                                                <div class="text"><?= htmlspecialchars($employee->address) ?></div>
                                            </li>
                                            <li>
                                                <div class="title">Gender:</div>
                                                <div class="text"><?= htmlspecialchars($employee->gender) ?></div>
                                            </li>
                                            <li>
                                                <div class="title">Reports to:</div>

                                                <div class="text">
                                                    <div class="avatar-box">
                                                        <!-- <div class="avatar avatar-xs">
                                                            <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                        </div> -->
                                                    </div>

                                                    <a href="profile.html">
                                                        Rayhan Khan
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
    <?php else: ?>
        <p>Employee not found</p>
    <?php endif; ?>
    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">Profile</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!-- Profile Info Tab -->
        <div id="emp_profile" class="pro-overview tab-pane fade show active" role="tabpanel">
            <!-- <div class="row">
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
            </div> -->
            <!-- 
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
        </div> -->

        </div>
    </div>