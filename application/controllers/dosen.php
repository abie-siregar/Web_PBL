<?php
Class Dosen extends CI_Controller{
     var $API ="localhost/PBLV2/index.php";
     function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    function index(){
        $url = 'localhost/PBLV2/index.php/Dosen';
        $api_data = $this->ambilDataDariAPI($url);
        $data['lstdosen'] = $api_data;
        $this->load->view('dosen', $data);
    }

    function tambah()
    {
        if (isset($_POST["submit"])) {
            $nidn = $_POST["nidn"];
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];
            $data = [
                "nidn" => $nidn,
                "nama" => $nama,
                "jurusan" => $jurusan,
                "email" => $email
            ];
            $url = "localhost/PBLV2/index.php/Dosen";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
        }
        redirect('dosen');
    }

    function edit()
    {
        $nidn = $this->input->get("nidn");
        
        $url = "localhost/PBLV2/index.php/Dosen?nidn=" . $nidn;
        $api_data = $this->ambilDataDariAPI($url);
        $data["dosen"] = $api_data;
        $this->load->view("dosen-edit", $data);
    }

    function ubah()
    {
        if (isset($_POST["submit"])) {
            $nidn = $this->input->get("nidn");
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];
            $data = [
                "nidn" => $nidn,
                "nama" => $nama,
                "jurusan" => $jurusan,
                "email" => $email,
            ];
            $url = "localhost/PBLV2/index.php/Dosen";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
        }
        redirect("dosen");
    }

    function hapus()
    {
        $nidn = $this->input->get("nidn");
        $url = "localhost/PBLV2/index.php/Dosen?nidn=" . $nidn;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_exec($ch);
        curl_close($ch);
        redirect("dosen");
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