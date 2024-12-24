<li class="submenu">
  <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span>
    <span class="menu-arrow"></span></a>
  <ul>
    <li><a href="employees.html">Your Dahboard</a></li>
    <!-- <li><a href="holidays.html">Holidays</a></li> -->
    <!-- <li>
      <a href="leaves.html"
        >Leaves (Admin)
        <span class="badge rounded-pill bg-primary float-end">1</span></a
      >
    </li> -->

  </ul>
  <?php if ($_SESSION['urole'] === "Employee") { ?>

<li><a href="<?php echo $base_url ?>/Leave_req/create">Leaves Application </a></li>
<!-- <li><a href="<?php //echo $base_url
                  ?>/LeaveEmployee">Leaves (Employee)</a></li> -->
<?php } ?>
<li><a href="<?php echo $base_url ?>/Holiday/emp_index">Holidays</a></li>
</li>
<!-- <li><a href="<?php echo $base_url; ?>/AttendanceDetail">Attendance Details</a></li> -->