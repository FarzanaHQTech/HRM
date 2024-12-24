<?php
class ProvidentType extends Model implements JsonSerializable
{
	public $id;
	public $type_name;

	public function __construct() {}
	public function set($id, $type_name)
	{
		$this->id = $id;
		$this->type_name = $type_name;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}Provident_Type(type_name)values('$this->type_name')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}Provident_Type set type_name='$this->type_name' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}Provident_Type where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,type_name from {$tx}Provident_Type");
		$data = [];
		while ($providenttype = $result->fetch_object()) {
			$data[] = $providenttype;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,type_name from {$tx}Provident_Type $criteria limit $top,$perpage");
		$data = [];
		while ($providenttype = $result->fetch_object()) {
			$data[] = $providenttype;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}Provident_Type $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,type_name from {$tx}Provident_Type where id='$id'");
		$providenttype = $result->fetch_object();
		return $providenttype;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}Provident_Type");
		$providenttype = $result->fetch_object();
		return $providenttype->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Type Name:$this->type_name<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbProvidentType")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}Provident_Type");
		while ($providenttype = $result->fetch_object()) {
			$html .= "<option value ='$providenttype->id'>$providenttype->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}Provident_Type $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,type_name from {$tx}Provident_Type $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "providenttype/create", "text" => "New ProvidentType"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Type Name</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Type Name</th></tr>";
		}
		while ($providenttype = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "providenttype/show/$providenttype->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "providenttype/edit/$providenttype->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "providenttype/confirm/$providenttype->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$providenttype->id</td><td>$providenttype->type_name</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,type_name from {$tx}Provident_Type where id={$id}");
		$providenttype = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">ProvidentType Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$providenttype->id</td></tr>";
		$html .= "<tr><th>Type Name</th><td>$providenttype->type_name</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
