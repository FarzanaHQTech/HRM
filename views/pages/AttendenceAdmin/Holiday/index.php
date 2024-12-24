<?php $holidays = Holiday::display();
$current_year = date("Y");
?>

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">

                <h3 class="page-title">Holidays<?= $current_year ?></h3>

                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Holidays</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/holiday/create" class="btn add-btn" id="btnAdd"><i class="fa-solid fa-plus"></i> Add Holiday</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Holiday Date</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($holidays as $value): ?>
                            <tr class="holiday-completed">
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['holiday_name'] ?></td>
                                <!-- <td><? //= date("j F, Y", $value['holiday_date']) 
                                            ?></td> -->
                                <td><?= htmlspecialchars($value['holiday_name']) ?></td>
                                <?php
                                $holiday_date = $value['holiday_date'];
                                $timestamp = strtotime($holiday_date);
                                ?>
                                <td><?= $timestamp ? date("j F, Y", $timestamp) : "Invalid date" ?></td>
                                <td><a href="<?php echo $base_url ?>/holiday/edit/<?= $value['id'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo $base_url ?>/Holiday/delete/<?= $value['id'] ?>" class="btn btn-danger text-white">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Holiday Modal -->

<div id="addHolidayModal" class="modal fade" tabindex="-1" aria-labelledby="addHolidayModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHolidayModalLabel">Add Holiday</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="holidayForm" action="<?php echo $base_url ?>/holiday/save" method="post">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Holiday Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="holiday_name" id="holiday_name" required>
                    </div>
                    <div class="input-block mb-3">
                        <label class="col-form-label">Holiday Date <span class="text-danger">*</span></label>
                        <input class="form-control" type="date" name="holiday_date" id="holiday_date" required>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn" name="btnCreate" id="btnSave">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('#btnAdd').click(function(e) {
            e.preventDefault(); // Prevent the default action of the link
            let holiday_name = $(".holiday_name").text()
            $('#addHolidayModal').modal('show'); // Show the modal

        });

        // Optional: Handle form submission via AJAX
        $('#holidayForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serialize();

            $.post("<?php echo $base_url ?>/holiday/save", formData, function(response) {

                $('#addHolidayModal').modal('hide'); // Close the modal
                location.reload();
            }).fail(function() {
                // Handle error response
                alert("Failed to add holiday. Please try again.");
            });
            console.log(response)
        });
        // $("#holidayForm").on("submit",function(e){
        //     e.preventDefault();
        //     let holiday_name = $("#holiday_name").text()
        //     let holiday_date = $("#holiday_date").text()

        //     $.ajax({
        //         url:"<?php //echo $base_url
                        ?>/holiday/save",
        //         type:"Post",
        //         data:{name:holiday_name,holiday_date:holiday_date},
        //         success:function(res){
        //             console.log(res)
        //         }

    })
</script> -->