<?php
class Payslip extends Model implements JsonSerializable
{
    public $id;
    public $employee_id;
    public $period;
    public $paydate;

    public function __construct() {}
    public function set($id, $employee_id, $period, $paydate)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->period = $period;
        $this->paydate = $paydate;
    }
    public function save()
    {
        global $db, $tx;
        $db->query("insert into {$tx}payslips(employee_id,period,paydate)values('$this->employee_id','$this->period','$this->paydate')");
        return $db->insert_id;
    }
    public function update()
    {
        global $db, $tx;
        $db->query("update {$tx}payslips set employee_id='$this->employee_id',period='$this->period',paydate='$this->paydate' where id='$this->id'");
    }
    public static function delete($id)
    {
        global $db, $tx;
        $db->query("delete from {$tx}payslips where id={$id}");
    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
    public static function all()
    {
        global $db, $tx;
        $result = $db->query("select id,employee_id,period,paydate from {$tx}payslips");
        $data = [];
        while ($payslip = $result->fetch_object()) {
            $data[] = $payslip;
        }
        return $data;
    }
    public static function pagination($page = 1, $perpage = 10, $criteria = "")
    {
        global $db, $tx;
        $top = ($page - 1) * $perpage;
        $result = $db->query("select id,employee_id,period,paydate from {$tx}payslips $criteria limit $top,$perpage");
        $data = [];
        while ($payslip = $result->fetch_object()) {
            $data[] = $payslip;
        }
        return $data;
    }
    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}payslips $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }
    // public static function find($id){
    //  global $db;
    //  $result =$db->query("select * from payslips where id='$id'");
    //  $payslip=$result->fetch_object();
    //  print_r($payslip->db->error);
    //  // if(!$payslip){
    //  //  echo $db->error;
    //  // }
    //   return $payslip;
    // }

    public static function find($id)
    {
        global $db, $tx;
        $stmt = $db->prepare("SELECT * FROM {$tx}payslips WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $payslip = $result->fetch_object();

        if (!$payslip) {
            // Handle case where no result is found
            return null;
        }

        return $payslip;
    }

    static function get_last_id()
    {
        global $db, $tx;
        $result = $db->query("select max(id) last_id from {$tx}payslips");
        $payslip = $result->fetch_object();
        return $payslip->last_id;
    }
    public function json()
    {
        return json_encode($this);
    }
    public function __toString()
    {
        return "		Id:$this->id<br>
		Employee Id:$this->employee_id<br>
		Period:$this->period<br>
		Paydate:$this->paydate<br>
";
    }

    //-------------HTML----------//

    static function html_select($name = "cmbPayslip")
    {
        global $db, $tx;
        $html = "<select id='$name' name='$name'> ";
        $result = $db->query("select id,name from {$tx}payslips");
        while ($payslip = $result->fetch_object()) {
            $html .= "<option value ='$payslip->id'>$payslip->name</option>";
        }
        $html .= "</select>";
        return $html;
    }

    static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
    {
        global $db, $tx, $base_url;
        $count_result = $db->query("select count(*) total from {$tx}payslips $criteria ");
        list($total_rows) = $count_result->fetch_row();
        $total_pages = ceil($total_rows / $perpage);
        $top = ($page - 1) * $perpage;

        $result = $db->query("SELECT 
            p.id,
            e.id as employee_id, 
            CONCAT(e.first_name, ' ', e.last_name) AS full_name,
            p.period,
            p.paydate 
        FROM {$tx}payslips p 
        JOIN employees e ON p.employee_id = e.id 
        $criteria 
        LIMIT $top, $perpage");

        $html = "<table class='table'>";
        $html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "payslip/create", "text" => "New Payslip"]) . "</th></tr>";

        if ($action) {
            $html .= "<tr><th>Id</th><th>Employee Id</th><th>Employee Name</th><th>Period</th><th>Paydate</th><th>Action</th></tr>";
        } else {
            $html .= "<tr><th>Id</th><th>Employee Id</th><th>Employee Name</th><th>Period</th><th>Paydate</th></tr>";
        }

        while ($payslip = $result->fetch_object()) {
            $action_buttons = "";
            if ($action) {
                $action_buttons = "<td><div class='btn-group' style='display:flex;'>";
                $action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-primary", "route" => "payslip/show/$payslip->id"]);
                // $action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "payslip/edit/$payslip->id"]);
                $action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "payslip/confirm/$payslip->id"]);
                $action_buttons .= "</div></td>";
            }
            $html .= "<tr><td>$payslip->id</td><td>$payslip->employee_id</td><td>$payslip->full_name</td><td>$payslip->period</td><td>$payslip->paydate</td>$action_buttons</tr>";
        }

        $html .= "</table>";
        $html .= pagination($page, $total_pages);
        return $html;
    }



    static function html_row_details($id)
    {
        global $db, $tx, $base_url;
        $result = $db->query("select id,employee_id,period,paydate from {$tx}payslips where id={$id}");
        $payslip = $result->fetch_object();
        $html = "<table class='table'>";
        $html .= "<tr><th colspan=\"2\">Payslip Show</th></tr>";
        $html .= "<tr><th>Id</th><td>$payslip->id</td></tr>";
        $html .= "<tr><th>Employee Id</th><td>$payslip->employee_id</td></tr>";
        // $html .= "<tr><th>Employee Name</th><td>$payslip->full_name</td></tr>";
        $html .= "<tr><th>Period</th><td>$payslip->period</td></tr>";
        $html .= "<tr><th>Paydate</th><td>$payslip->paydate</td></tr>";

        $html .= "</table>";
        return $html;
    }
}
