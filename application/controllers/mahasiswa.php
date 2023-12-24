<?php
class Mahasiswa extends CI_Controller
{
    var $API = "localhost/PBLV2/index.php";
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->library("curl");
        $this->load->helper("form");
        $this->load->helper("url");
    }
    function index()
    {
        $url = "localhost/PBLV2/index.php/Mahasiswa";
        $api_data = $this->ambilDataDariAPI($url);
        $data["lstmahasiswa"] = $api_data;
        $this->load->view("mahasiswa", $data);
    }

    function tambah()
    {
        if (isset($_POST["submit"])) {
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];
            $data = [
                "nim" => $nim,
                "nama" => $nama,
                "jurusan" => $jurusan,
                "email" => $email,
            ];
            $url = "localhost/PBLV2/index.php/Mahasiswa";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
        }
        redirect("mahasiswa");
    }

    function edit()
    {
        $nim = $this->input->get("nim");

        $url = "localhost/PBLV2/index.php/Mahasiswa?nim=" . $nim;
        $api_data = $this->ambilDataDariAPI($url);
        $data["mahasiswa"] = $api_data;
        $this->load->view("mahasiswa-edit", $data);
    }

    function ubah()
    {
        if (isset($_POST["submit"])) {
            $nim = $this->input->get("nim");
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];
            $data = [
                "nim" => $nim,
                "nama" => $nama,
                "jurusan" => $jurusan,
                "email" => $email,
            ];
            $url = "localhost/PBLV2/index.php/Mahasiswa";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
        }
        redirect("mahasiswa");
    }

    function hapus()
    {
        $nim = $this->input->get("nim");
        $url = "localhost/PBLV2/index.php/Mahasiswa?nim=" . $nim;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_exec($ch);
        curl_close($ch);
        redirect("mahasiswa");
    }

    private function ambilDataDariAPI($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }
}
?>
