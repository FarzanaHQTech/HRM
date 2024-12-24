			<!-- Sidebar -->

			<div class="sidebar" id="sidebar">

				<div class="sidebar-inner slimscroll">

					<div id="sidebar-menu" class="sidebar-menu">
						<ul class="sidebar-vertical">
							<?php
							if ($_SESSION['urole'] == "Admin") {
								include_once "menus/main_dash_menu.php";

								include_once "menus/employee_menu.php";
								include_once "menus/hr_menu.php";
								include_once "menus/perfomance_menu.php";
								include_once "menus/Administration_menu.php";
							} elseif ($_SESSION['urole'] == "Employee") {
								include_once "menus/emp_dash_menu.php";
								// include_once "menus/emp_dash_menu.php";

							}
							?>


					</div>
				</div>
			</div>