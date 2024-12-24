<?php $Attendance = Attendance::display();
// print_r($Attendance);

?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Attendance Reports</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Attendance Reports</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Content Starts -->
    <!-- Search Filter -->
    <!-- <div class="row filter-row">

        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus focused">
                <div class="cal-icon">
                    <select class="form-control floating select select2-hidden-accessible" data-select2-id="select2-data-1-viwk" tabindex="-1" aria-hidden="true">
                        <option data-select2-id="select2-data-3-1f5w">
                            Jan
                        </option>
                        <option>
                            Feb
                        </option>
                        <option>
                            Mar
                        </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-dh7b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-v3iq-container" aria-controls="select2-v3iq-container"><span class="select2-selection__rendered" id="select2-v3iq-container" role="textbox" aria-readonly="true" title="
											Jan
										">
                                    Jan
                                </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <label class="focus-label">Month</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus focused">
                <div class="cal-icon">
                    <select class="form-control floating select select2-hidden-accessible" data-select2-id="select2-data-4-xoqu" tabindex="-1" aria-hidden="true">
                        <option data-select2-id="select2-data-6-pfhv">
                            2020
                        </option>
                        <option>
                            2019
                        </option>
                        <option>
                            2018
                        </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-a28h" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-3wo0-container" aria-controls="select2-3wo0-container"><span class="select2-selection__rendered" id="select2-3wo0-container" role="textbox" aria-readonly="true" title="
											2020
										">
                                    2020
                                </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <label class="focus-label">Year</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="d-grid">
                <a href="#" class="btn btn-success"> Search </a>
            </div>
        </div>
    </div> -->
    <!-- /Search Filter -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <!-- <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 69.5469px;">#</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 69.5469px;">Employee</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 188.625px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Clock In: activate to sort column ascending" style="width: 165.719px;">Clock In</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Clock Out: activate to sort column ascending" style="width: 193.484px;">Clock Out</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Work Status: activate to sort column ascending" style="width: 223.625px;">Work Status</th>
                                    </tr>
                                </thead>
                                <tbody>





                                    <?php foreach ($Attendance as $attendance): ?>
                                        <tr class="odd">
                                            <td class="sorting_1">1</td>
                                            <td><?= $attendance['employee_name'] ?></td>
                                            <td><?= $attendance['date'] ?></td>
                                            <td><?= $attendance['check_in_time'] ?></td>
                                            <td><?= $attendance['check_out_time'] ?></td>
                                            <td><?= $attendance['status'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- <tr class="even">
                                        <td class="sorting_1">2</td>
                                        <td>2 Jan 2020</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">3</td>
                                        <td>3 Jan 2020</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">4</td>
                                        <td>4 Jan 2020</td>
                                        <td>-</td>
                                        <td class="text-danger text-center">Week Off</td>
                                        <td>-</td>

                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">5</td>
                                        <td>5 Jan 2020</td>
                                        <td>-</td>
                                        <td class="text-danger text-center">Week Off</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">6</td>
                                        <td>6 Jan 2020</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr> -->
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
        </div>
    </div>

    <!-- /Content End -->

</div>