<?php
class TrainingType extends Model implements JsonSerializable
{
	public $id;
	public $type_name;
	public $status;
	public $created_at;
	public $updated_at;

	public function __construct() {}
	public function set($id, $type_name, $status, $created_at, $updated_at)
	{
		$this->id = $id;
		$this->type_name = $type_name;
		$this->status = $status;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}training_types(type_name,status,created_at,updated_at)values('$this->type_name','$this->status','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}training_types set type_name='$this->type_name',status='$this->status',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}training_types where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,type_name,status,created_at,updated_at from {$tx}training_types");
		$data = [];
		while ($trainingtype = $result->fetch_object()) {
			$data[] = $trainingtype;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,type_name,status,created_at,updated_at from {$tx}training_types $criteria limit $top,$perpage");
		$data = [];
		while ($trainingtype = $result->fetch_object()) {
			$data[] = $trainingtype;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}training_types $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,type_name,status,created_at,updated_at from {$tx}training_types where id='$id'");
		$trainingtype = $result->fetch_object();
		return $trainingtype;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}training_types");
		$trainingtype = $result->fetch_object();
		return $trainingtype->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Type Name:$this->type_name<br> 
		Status:$this->status<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTrainingType")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}training_types");
		while ($trainingtype = $result->fetch_object()) {
			$html .= "<option value ='$trainingtype->id'>$trainingtype->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}training_types $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,type_name,status,created_at,updated_at from {$tx}training_types $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "trainingtype/create", "text" => "New TrainingType"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Type Name</th><th>Status</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Type Name</th><th>Status</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while ($trainingtype = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "trainingtype/show/$trainingtype->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "trainingtype/edit/$trainingtype->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "trainingtype/confirm/$trainingtype->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$trainingtype->id</td><td>$trainingtype->type_name</td><td>$trainingtype->status</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,type_name,status,created_at,updated_at from {$tx}training_types where id={$id}");
		$trainingtype = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TrainingType Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$trainingtype->id</td></tr>";
		$html .= "<tr><th>Type Name</th><td>$trainingtype->type_name</td></tr>";
		$html .= "<tr><th>Status</th><td>$trainingtype->status</td></tr>";
		$html .= "<tr><th>Created At</th><td>$trainingtype->created_at</td></tr>";
		$html .= "<tr><th>Updated At</th><td>$trainingtype->updated_at</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
