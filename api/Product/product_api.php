<?php
class ProductApi extends Api
{
	public function __construct()
	{
		if (!$this->authorized()) {

			if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_METHOD'] == 'DELETE' && $_SERVER['REQUEST_METHOD'] == 'PUT') {
				http_response_code(401); //Not Authorized
				die("401 Unauthorized");
			}
		}
	}
	function index()
	{
		echo json_encode(["products" => Product::all()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["products" => Product::pagination($page, $perpage), "total_records" => Product::count()]);
	}
	function find($data)
	{
		echo json_encode(["product" => Product::find($data["id"])]);
	}
	function delete($data)
	{
		// Product::delete($data['id']);
		Product::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$product = new Product();
		$product->name = $data["name"];
		$product->description = $data["description"];
		$product->price = $data["price"];




		$product->image = upload($data['image'], "../img/react/product", $data['name']);
		// $employes->photo = upload($file["photo"], "../img/react", $data["name"]);


		$product->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data, $file = [])
	{
		$product = new Product();
		$product->id = $data["id"];
		$product->name = $data["name"];
		$product->description = $data["description"];
		$product->price = $data["price"];
		$product->image = upload($data['image'], "../img/react/product", $data['name']);

		$product->update();
		echo json_encode(["success" => "yes"]);
	}
}
