  <!-- <style>
        /* Basic styling for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 50px;
            z-index: 1000;
        }
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body> -->
    <!-- <form method="post" action="<?php //echo $base_url?>/save">
    <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url?>/department/create" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department" id="add-department"><i class="fa-solid fa-plus"></i> Add Department</a>
    </div> -->
        <!-- <label for="department">Department:</label>
        <input type="text" id="department" name="department">
        <button type="button" id="add-department">Add Department</button> -->
    <!-- </form> -->
    <!-- Popup HTML -->
    <!-- <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="popup">
        <h3>Add New Department</h3>
        <form id="popup-form" action="<?php //echo $base_url?>Department/save" method="post" >
            <label for="new-department" >Department Name:</label>
            <input type="text" id="new-department" name="department_name" required class="form-controll">
            <button type="submit" class="btn btn-primary" name="saveDept">Save</button>
            <button type="button" id="close-popup" class="btn btn-primary">Cancel</button>
        </form>
    </div> -->

    <!-- <script>
        // JavaScript to handle popup functionality
        const addButton = document.getElementById('add-department');
        const popup = document.getElementById('popup');
        const overlay = document.getElementById('popup-overlay');
        const closePopup = document.getElementById('close-popup');

        // Show the popup
        addButton.addEventListener('click', () => {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        });

        // Close the popup
        closePopup.addEventListener('click', () => {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });

        // Handle form submission inside the popup
        document.getElementById('popup-form').addEventListener('submit', (e) => {
            e.preventDefault();
            const newDepartment = document.getElementById('new-department').value;

            // Add the new department to the main form field
            document.getElementById('department').value = newDepartment;

            // Close the popup
            popup.style.display = 'none';
            overlay.style.display = 'none';
        });
    </script>
</body>
</html> -->
<h2 class="text-center">Add Department</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/department/save" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="department_name">
       
        <button type="submit" class="btn btn-primary mt-5" name="createDept">Submit</button>
        
    </form>
</div>


