<?php
class Koneksi {
    private $server = "localhost";
    private $username = "root"; //root
    private $password = ""; //""
    private $db = "tugas uts";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>