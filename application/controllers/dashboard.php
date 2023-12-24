<?php
Class Dashboard extends CI_Controller{
     var $API ="localhost/PBLV2/index.php";
     function __construct() {
        parent::__construct();
        //$this->API="localhost/PBLV2/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    // menampilkan data mahasiswa
    function index(){
        $url = 'localhost/PBLV2/index.php/Pengajuan';
        $api_data = $this->ambilDataDariAPI($url);
        $data['lstpengajuan'] = $api_data;
        $this->load->view('dashboard', $data);
    }

    private function ambilDataDariAPI($url) {
        // Lakukan pemanggilan API di sini
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }
}
?>