<?php
class Product extends Model implements JsonSerializable
{
	public $id;
	public $name;
	public $description;
	public $price;
	public $image;
	public $created_at;

	public function __construct() {}
	public function set($id, $name, $description, $price, $image, $created_at)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->image = $image;
		$this->created_at = $created_at;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}products(name,description,price,image,created_at)values('$this->name','$this->description','$this->price','$this->image','$this->created_at')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}products set name='$this->name',description='$this->description',price='$this->price',image='$this->image',created_at='$this->created_at' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}products where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name,description,price,image,created_at from {$tx}products");
		$data = [];
		while ($product = $result->fetch_object()) {
			$data[] = $product;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,description,price,image,created_at from {$tx}products $criteria limit $top,$perpage");
		$data = [];
		while ($product = $result->fetch_object()) {
			$data[] = $product;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}products $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name,description,price,image,created_at from {$tx}products where id='$id'");
		$product = $result->fetch_object();
		return $product;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}products");
		$product = $result->fetch_object();
		return $product->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Description:$this->description<br> 
		Price:$this->price<br> 
		Image:$this->image<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbProduct")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}products");
		while ($product = $result->fetch_object()) {
			$html .= "<option value ='$product->id'>$product->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}products $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,description,price,image,created_at from {$tx}products $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "product/create", "text" => "New Product"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th><th>Created At</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th><th>Created At</th></tr>";
		}
		while ($product = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "product/show/$product->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "product/edit/$product->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "product/confirm/$product->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$product->id</td><td>$product->name</td><td>$product->description</td><td>$product->price</td><td>$product->image</td><td>$product->created_at</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name,description,price,image,created_at from {$tx}products where id={$id}");
		$product = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">Product Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$product->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$product->name</td></tr>";
		$html .= "<tr><th>Description</th><td>$product->description</td></tr>";
		$html .= "<tr><th>Price</th><td>$product->price</td></tr>";
		$html .= "<tr><th>Image</th><td>$product->image</td></tr>";
		$html .= "<tr><th>Created At</th><td>$product->created_at</td></tr>";

		$html .= "</table>";
		return $html;
	}
}
