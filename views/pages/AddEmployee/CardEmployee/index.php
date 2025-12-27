<?php $employees = Allemployee::display(); ?>

<div class="content container-fluid pb-0">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Employee</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/cardemployee/create" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add Employee</a>
                <div class="view-icons">
                    <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="employees-list.html" class="list-view btn btn-link"><i class="fa-solid fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <div class="content container-fluid pb-0">
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="input-block mb-3 form-focus">
                    <input type="text" id="id" class="form-control floating">
                    <label class="focus-label">Employee ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="input-block mb-3 form-focus">
                    <input type="text" id="fullName" class="form-control floating">
                    <label class="focus-label">Employee Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="input-block mb-3 form-focus select-focus focused">
                    <select class="form-select form-controll">
                        <option data-select2-id="select2-data-3-xvpy">Select Designation</option>
                        <option>Web Developer</option>
                        <option>Web Designer</option>
                        <option>Android Developer</option>
                        <option>Ios Developer</option>
                    </select>

                    <!-- <label class="focus-label">Designation</label> -->
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="d-grid">
                    <button id="search_btn" class="btn btn-success w-100"> Search </button>
                </div>
            </div>
        </div>
        <!-- Employee Profile  -->
        <div class="row staff-grid-row" id="profiles">


        </div>

    </div>

    <script>
        $(function() {
            // let allEmployees = [];

            $.ajax({
                url: "<?php echo $base_url ?>/api/employees",
                type: "GET",
                data: {},
                success: function(res) {
                    const data = JSON.parse(res);
                    const employees = data?.employees;
                    // employees.forEach(em => allEmployees.push(em));
                    // allEmployees.push(emp)
                    let html = "";
                    employees.forEach(employee => (
                        html += `<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                <div class="profile-img">
                  
                    <a href="<?php echo $base_url ?>/CardEmployee/profile?id=${employee.id}" class="avatar"><img src="<?php echo $base_url ?>/img/employees/${employee.image}" alt="User Image"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?php echo $base_url ?>/cardEmployee/edit?id=${employee.id}"  data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="<?php echo $base_url ?>/cardEmployee/delete?id=${employee.id}"  data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">${employee.first_name} ${employee.last_name}</a></h4>
                <div class="small text-muted">${employee.designation}</div>
            </div>
            </div>`
                    ));

                    $("#profiles").html(html);

                }
            });


            $("#search_btn").on("click", function() {
                // alert()
                const id = $("#id").val();
                const fullName = $("#fullName").val();
                const fname = fullName?.split(" ")[0];
                const lname = fullName?.split(" ")[1];

                $.ajax({
                    url: "<?php echo $base_url ?>/api/employees/find",
                    type: "GET",
                    data: {
                        first_name: fname || "",
                        last_name: lname || "",
                        id: id
                    },
                    success: function(res) {
                        const data = JSON.parse(res);
                        const employee = data.employee;
                        // allEmployees.push(employee);


                        let profile = `
                                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                            <div class="profile-img">
                            
                                <a href="<?php echo $base_url ?>/CardEmployee/profile?id=${employee.id}" class="avatar"><img src="<?php echo $base_url ?>/img/employees/${employee.image}" alt="User Image"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $base_url ?>/CardEmployee/edit?id=${employee.id}" data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="<?php echo $base_url ?>/cardEmployee/delete?id=${employee.id}" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">${employee.first_name} ${employee.last_name}</a></h4>
                            <div class="small text-muted">${employee.designation}</div>
                        </div>
                        </div>
                    `;

                        $("#profiles").html(profile);


                    }
                })

                $("#id").val("");
                $("#fullName").val("");
            });
        })
    </script>