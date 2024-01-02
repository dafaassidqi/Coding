<?php 

class Teknisi2 {
    
    private $mysqli;

    function __construct($conn) {
        $this->mysqli = $conn;
    }

    public function tampil($id = null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM  tkns2";
        if($id != null) {
            $sql .= " WHERE id_tkns2 = $id";
        }
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }

    public function tambah($almt, $negara, $kota, $kode_pos, $nib, $no_rek, $sc_akta_kelahiran, $sc_kk, $sc_ktp, $sc_perjanjian_krjsm) {
        $db = $this->mysqli->conn;
        $db->query("INSERT INTO tkns2 VALUES ('', '$almt', '$negara', '$kota', '$kode_pos', '$nib', '$no_rek', '$sc_akta_kelahiran', '$sc_kk', '$sc_ktp', '$sc_perjanjian_krjsm')") or die ($db->error);
    }


    public function edit($sql) {
        $db = $this->mysqli->conn;
        $db->query($sql) or die ($db->error);
    }
    public function hapus($id) {
        $db = $this->mysqli->conn;
        $db->query("DELETE FROM tkns2 WHERE id_tkns2 = '$id'") or die ($db->error);
    }
    function __destruct() {
        $db = $this->mysqli->conn;
        $db->close();
    }
}

?>