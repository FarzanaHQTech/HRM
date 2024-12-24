<?php
class GoalType extends Model implements JsonSerializable
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
		$db->query("insert into {$tx}goal_types(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}goal_types set name='$this->name' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}goal_types where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}goal_types");
		$data = [];
		while ($goaltype = $result->fetch_object()) {
			$data[] = $goaltype;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}goal_types $criteria limit $top,$perpage");
		$data = [];
		while ($goaltype = $result->fetch_object()) {
			$data[] = $goaltype;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}goal_types $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}goal_types where id='$id'");
		$goaltype = $result->fetch_object();
		return $goaltype;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}goal_types");
		$goaltype = $result->fetch_object();
		return $goaltype->last_id;
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

	static function html_select($name = "cmbGoalType")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}goal_types");
		while ($goaltype = $result->fetch_object()) {
			$html .= "<option value ='$goaltype->id'>$goaltype->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}goal_types $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}goal_types $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "goaltype/create", "text" => "New GoalType"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th></tr>";
		}
		while ($goaltype = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "goaltype/show/$goaltype->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "goaltype/edit/$goaltype->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "goaltype/confirm/$goaltype->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$goaltype->id</td><td>$goaltype->name</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name from {$tx}goal_types where id={$id}");
		$goaltype = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">GoalType Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$goaltype->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$goaltype->name</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
