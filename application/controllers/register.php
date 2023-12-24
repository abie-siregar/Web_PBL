<?php
class Register extends CI_Controller
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
        $this->load->view("register");
    }

    function tambah()
    {
        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $data = [
                "username" => $username,
                "password" => $password
            ];
            $url = "localhost/PBLV2/index.php/Users/signup";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

            curl_exec($ch);
            curl_close($ch);
        }
        redirect("register");
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
