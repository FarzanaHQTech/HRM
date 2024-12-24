<?php
class PayslipItem extends Model implements JsonSerializable
{
    public $id;
    public $name;
    public $factor;

    public function __construct() {}
    public function set($id, $name, $factor)
    {
        $this->id = $id;
        $this->name = $name;
        $this->factor = $factor;
    }
    public function save()
    {
        global $db, $tx;
        $db->query("insert into {$tx}payslip_items(name,factor)values('$this->name','$this->factor')");
        return $db->insert_id;
    }
    public function update()
    {
        global $db, $tx;
        $db->query("update {$tx}payslip_items set name='$this->name',factor='$this->factor' where id='$this->id'");
    }
    public static function delete($id)
    {
        global $db, $tx;
        $db->query("delete from {$tx}payslip_items where id={$id}");
    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
    public static function all()
    {
        global $db, $tx;
        $result = $db->query("select id,name,factor from {$tx}payslip_items");
        $data = [];
        while ($payslipitem = $result->fetch_object()) {
            $data[] = $payslipitem;
        }
        return $data;
    }
    public static function pagination($page = 1, $perpage = 10, $criteria = "")
    {
        global $db, $tx;
        $top = ($page - 1) * $perpage;
        $result = $db->query("select id,name,factor from {$tx}payslip_items $criteria limit $top,$perpage");
        $data = [];
        while ($payslipitem = $result->fetch_object()) {
            $data[] = $payslipitem;
        }
        return $data;
    }
    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}payslip_items $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }
    public static function find($id)
    {
        global $db, $tx;
        $result = $db->query("select id,name,factor from {$tx}payslip_items where id='$id'");
        $payslipitem = $result->fetch_object();
        return $payslipitem;
    }
    static function get_last_id()
    {
        global $db, $tx;
        $result = $db->query("select max(id) last_id from {$tx}payslip_items");
        $payslipitem = $result->fetch_object();
        return $payslipitem->last_id;
    }
    public function json()
    {
        return json_encode($this);
    }
    public function __toString()
    {
        return "		Id:$this->id<br>
		Name:$this->name<br>
		Factor:$this->factor<br>
";
    }

    //-------------HTML----------//

    static function html_select($name = "cmbPayslipItem")
    {
        global $db, $tx;
        $html = "<select id='$name' name='$name'> ";
        $result = $db->query("select id,name from {$tx}payslip_items");
        while ($payslipitem = $result->fetch_object()) {
            $html .= "<option value ='$payslipitem->id'>$payslipitem->name</option>";
        }
        $html .= "</select>";
        return $html;
    }
    public static function html_earning_select($name = "cmbPayslipItem")
    {
        global $db, $tx;
        $html = "<select class ='form-select form-controll' id='$name' name='$name'> ";
        $result = $db->query("SELECT id, name FROM {$tx}payslip_items WHERE factor = 1");
        while ($payslipitem = $result->fetch_object()) {
            $html .= "<option value ='$payslipitem->id'>$payslipitem->name</option>";
        }
        $html .= "</select>";
        return $html;
    }
    public static function html_deduction_select($name = "cmbPayslipItem")
    {
        global $db, $tx;
        $html = "<select class ='form-select form-controll' id='$name' name='$name'> ";
        $result = $db->query("SELECT id, name FROM {$tx}payslip_items WHERE factor = 2");
        while ($payslipitem = $result->fetch_object()) {
            $html .= "<option value ='$payslipitem->id'>$payslipitem->name</option>";
        }
        $html .= "</select>";
        return $html;
    }

    static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
    {
        global $db, $tx, $base_url;
        $count_result = $db->query("select count(*) total from {$tx}payslip_items $criteria ");
        list($total_rows) = $count_result->fetch_row();
        $total_pages = ceil($total_rows / $perpage);
        $top = ($page - 1) * $perpage;
        $result = $db->query("select id,name,factor from {$tx}payslip_items $criteria limit $top,$perpage");
        $html = "<table class='table'>";
        $html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "payslipitem/create", "text" => "New PayslipItem"]) . "</th></tr>";
        if ($action) {
            $html .= "<tr><th>Id</th><th>Name</th><th>Factor</th><th>Action</th></tr>";
        } else {
            $html .= "<tr><th>Id</th><th>Name</th><th>Factor</th></tr>";
        }
        while ($payslipitem = $result->fetch_object()) {
            $action_buttons = "";
            if ($action) {
                $action_buttons = "<td><div class='btn-group' style='display:flex;'>";
                $action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "payslipitem/show/$payslipitem->id"]);
                $action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "payslipitem/edit/$payslipitem->id"]);
                $action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "payslipitem/confirm/$payslipitem->id"]);
                $action_buttons .= "</div></td>";
            }
            $html .= "<tr><td>$payslipitem->id</td><td>$payslipitem->name</td><td>$payslipitem->factor</td> $action_buttons</tr>";
        }
        $html .= "</table>";
        $html .= pagination($page, $total_pages);
        return $html;
    }
    static function html_row_details($id)
    {
        global $db, $tx, $base_url;
        $result = $db->query("select id,name,factor from {$tx}payslip_items where id={$id}");
        $payslipitem = $result->fetch_object();
        $html = "<table class='table'>";
        $html .= "<tr><th colspan=\"2\">PayslipItem Show</th></tr>";
        $html .= "<tr><th>Id</th><td>$payslipitem->id</td></tr>";
        $html .= "<tr><th>Name</th><td>$payslipitem->name</td></tr>";
        $html .= "<tr><th>Factor</th><td>$payslipitem->factor</td></tr>";

        $html .= "</table>";
        return $html;
    }
}
