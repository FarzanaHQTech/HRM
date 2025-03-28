<?php
class AttendanceStatu extends Model implements JsonSerializable
{
	public $id;
	public $status_name;
	public $description;

	public function __construct() {}
	public function set($id, $status_name, $description)
	{
		$this->id = $id;
		$this->status_name = $status_name;
		$this->description = $description;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}attendance_status(status_name,description)values('$this->status_name','$this->description')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}attendance_status set status_name='$this->status_name',description='$this->description' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}attendance_status where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,status_name,description from {$tx}attendance_status");
		$data = [];
		while ($attendancestatu = $result->fetch_object()) {
			$data[] = $attendancestatu;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,status_name,description from {$tx}attendance_status $criteria limit $top,$perpage");
		$data = [];
		while ($attendancestatu = $result->fetch_object()) {
			$data[] = $attendancestatu;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}attendance_status $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,status_name,description from {$tx}attendance_status where id='$id'");
		$attendancestatu = $result->fetch_object();
		return $attendancestatu;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}attendance_status");
		$attendancestatu = $result->fetch_object();
		return $attendancestatu->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Status Name:$this->status_name<br> 
		Description:$this->description<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbAttendanceStatu")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}attendance_status");
		while ($attendancestatu = $result->fetch_object()) {
			$html .= "<option value ='$attendancestatu->id'>$attendancestatu->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}attendance_status $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,status_name,description from {$tx}attendance_status $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "attendancestatu/create", "text" => "New AttendanceStatu"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Status Name</th><th>Description</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Status Name</th><th>Description</th></tr>";
		}
		while ($attendancestatu = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "attendancestatu/show/$attendancestatu->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "attendancestatu/edit/$attendancestatu->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "attendancestatu/confirm/$attendancestatu->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$attendancestatu->id</td><td>$attendancestatu->status_name</td><td>$attendancestatu->description</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,status_name,description from {$tx}attendance_status where id={$id}");
		$attendancestatu = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">AttendanceStatu Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$attendancestatu->id</td></tr>";
		$html .= "<tr><th>Status Name</th><td>$attendancestatu->status_name</td></tr>";
		$html .= "<tr><th>Description</th><td>$attendancestatu->description</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
