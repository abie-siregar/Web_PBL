<?php
Class Pengajuan extends CI_Controller{
     var $API ="localhost/PBLV2/index.php";
     function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    function index(){
        $type = $this->input->get('type');
        $url = 'localhost/PBLV2/index.php/Pengajuan?type='. $type;
        $api_data = $this->ambilDataDariAPI($url);
        $data['lstpengajuan'] = $api_data;
        $data['type'] = $type;
        $this->load->view('tampil', $data);
    }
    private function ambilDataDariAPI($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

    function tambah(){
        if(isset($_POST['submit'])){
            $id =  $_POST['id'];
            $tipepengajuan = $_POST['tipepengajuan'];
            $deskripsi = $_POST['deskripsi'];
            $tglpengajuan = $_POST['tglpengajuan'];
            $status = $_POST['status'];
            $data = array(
                'id' => $id,
                'tipepengajuan' => $tipepengajuan,
            'deskripsi' => $deskripsi,
            'tglpengajuan' => $tglpengajuan,
            'status' => $status);
            $url = 'localhost/PBLV2/index.php/Pengajuan';
            $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        curl_exec($ch);
        curl_close($ch);
            $url = 'localhost/PBLV2/index.php/Pengajuan?type='. $tipepengajuan;
            $api_data = $this->ambilDataDariAPI($url);
            $data['lstpengajuan'] = $api_data;
            $data['type'] = $tipepengajuan;
            redirect("listpengajuan?type=". $tipepengajuan);
        }else{
            $type = 'Magang';
            $url = 'localhost/PBLV2/index.php/Pengajuan?type='. $type;
            $api_data = $this->ambilDataDariAPI($url);
            $data['lstpengajuan'] = $api_data;
            $data['type'] = $type;
            redirect("listpengajuan?type=". $type);
            //$this->load->view('tampil', $data);
        }
    }

    function edit()
    {
        $id = $this->input->get("id");

        $url = "localhost/PBLV2/index.php/Pengajuan?id=" . $id;
        $api_data = $this->ambilDataDariAPI($url);
        $data["pengajuan"] = $api_data;
        $this->load->view("pengajuan-edit", $data);
    }

    function ubah()
    {
        if (isset($_POST["submit"])) {
            $id = $this->input->get("id");
            $tipepengajuan = $_POST["tipepengajuan"];
            $deskripsi = $_POST["deskripsi"];
            $tglpengajuan = $_POST["tglpengajuan"];
            $status = $_POST["status"];
            $data = [
                "id" => $id,
                "tipepengajuan" => $tipepengajuan,
                "deskripsi" => $deskripsi,
                "tglpengajuan" => $tglpengajuan,
                "status" => $status
            ];
            $url = "localhost/PBLV2/index.php/Pengajuan";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
            redirect("listpengajuan?type=". $tipepengajuan);
        }
        else{
            redirect("listpengajuan?type=PBL");
        }
    }

    function hapus()
    {
        $id = $this->input->get("id");
        $type = $this->input->get("type");
        echo "type". $type;
        $url = "localhost/PBLV2/index.php/Pengajuan?id=" . $id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_exec($ch);
        curl_close($ch);
        redirect("listpengajuan?type=". $type);
    }
}
?>