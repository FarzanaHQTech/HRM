<?php $Status = Status::display();
$employees = Allemployee::display();
?>
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Trainer</h5>
    </div>
    <div class="modal-body">
        <form>
            <table>
                <div class="row" id="selected">
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Trainer Name <span class="text-danger">*</span></label>
                            <!-- <input class="form-control" type="text"> -->
                            <select class="form-select form-controll" name="employee_id" id="employee_id">
                                <option value="">Select Trainer</option>
                                <?php foreach ($employees as $employee): ?>
                                    <option value="<?php echo $employee['id'] ?>"><?= ($employee['first_name'] . ' ' . $employee['last_name']) ?></option>
                                <?php endforeach; ?>
                                <!-- <option>Inactive</option> -->
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Desgination<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="designation" id="designation">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Phone </label>
                            <input class="form-control" type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Status</label>
                            <select class="form-select form-controll" name="status" id="status_id">
                                <?php foreach ($Status as $value): ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['status_name'] ?></option>
                                <?php endforeach; ?>
                                <!-- <option>Inactive</option> -->
                            </select>

                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn" name="btnCreate" id="trainer_submit">Submit</button>
                </div>
            </table>
        </form>
    </div>
</div>





<script>
    $(function() {
        const trainerData = {};
        $("#employee_id").on("change", function() {
            // alert("");
            let employee_id = $(this).val()

            $.ajax({
                url: "<?php echo $base_url ?>/api/trainer/get_trainer",
                type: "Get",
                data: {
                    id: employee_id
                },
                success: function(res) {
                    // console.log(res);
                    let data = JSON.parse(res);

                    // get from json parse
                    let trainer = data.trainer;

                    // console.log(trainer);
                    // set the value in the input  and set it trainerData object 
                    $("#designation").val(trainer.designation)
                    $("#email").val(trainer.email)
                    $("#phone").val(trainer.mobile)

                    // console.log(trainerData);

                },

                error: function(res) {}
            })



            // submit trainer form //proccess
            $("#trainer_submit").on("click", function(e) {
                e.preventDefault();

                const employee_id = $("#employee_id").val();
                const designation = $.trim($("#designation").val());
                const email = $("#email").val();
                const mobile = $("#phone").val();
                const status_id = $("#status_id").val();

                // let designation_id = {};
                $.ajax({
                    url: "<?php echo $base_url ?>/api/trainer/designation_id",
                    type: "GET",
                    data: {
                        designation
                    },
                    success: function(res) {
                        const designationID = JSON.parse(res);

                        const designation_id = designationID.id.id;
                        // -----end code for take designation id---//


                        // for create /save in database 
                        $.ajax({
                            url: "<?php echo $base_url ?>/api/trainer/create",
                            type: "POST",
                            data: {
                                employee_id,
                                designation: designation_id,
                                email,
                                mobile,
                                status_id
                            },
                            success: function(res) {
                                // console.log(res);
                                const data = JSON.parse(res);
                                console.log(data);
                                window.location.replace("<?php echo $base_url ?>/trainer")

                            },

                            error: function(res) {}
                        })
                    },

                    error: function(res) {}
                })
                // console.log("All Data", employee_id, designation_id.id, email, mobile, status_id);




            })
        });
    });
</script>