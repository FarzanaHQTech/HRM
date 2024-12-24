<?php
class GoalStatu extends Model implements JsonSerializable
{
	public $id;
	public $name;

	public function __construct() {}
	public function set($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}goal_status(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}goal_status set name='$this->name' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}goal_status where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}goal_status");
		$data = [];
		while ($goalstatu = $result->fetch_object()) {
			$data[] = $goalstatu;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}goal_status $criteria limit $top,$perpage");
		$data = [];
		while ($goalstatu = $result->fetch_object()) {
			$data[] = $goalstatu;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}goal_status $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}goal_status where id='$id'");
		$goalstatu = $result->fetch_object();
		return $goalstatu;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}goal_status");
		$goalstatu = $result->fetch_object();
		return $goalstatu->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbGoalStatu")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}goal_status");
		while ($goalstatu = $result->fetch_object()) {
			$html .= "<option value ='$goalstatu->id'>$goalstatu->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}goal_status $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}goal_status $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "goalstatu/create", "text" => "New GoalStatu"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th></tr>";
		}
		while ($goalstatu = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "goalstatu/show/$goalstatu->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "goalstatu/edit/$goalstatu->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "goalstatu/confirm/$goalstatu->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$goalstatu->id</td><td>$goalstatu->name</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name from {$tx}goal_status where id={$id}");
		$goalstatu = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">GoalStatu Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$goalstatu->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$goalstatu->name</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
