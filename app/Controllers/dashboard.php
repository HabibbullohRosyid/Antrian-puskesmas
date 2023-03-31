<?php

namespace App\Controllers;

use App\Models\IndexModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->database();
        $this->load->helper(array('url', 'html', 'form'));
    }
    public function bar_chart()
    {

        $query =  $this->db->query("SELECT COUNT(id_pasien) as count,MONTHNAME(created_at) as month_name FROM users WHERE YEAR(created_at) = '" . date('Y') . "'
      GROUP BY YEAR(created_at),MONTH(created_at)");

        $record = $query->result();
        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }
        $data['chart_data'] = json_encode($data);
        $this->load->view('bar_chart', $data);
    }
}
?>
public function index()
{
$data = [
'controller' => 'dashboard',
'title' => 'Dashboard'
];

return view('dashboard', $data);

}
}